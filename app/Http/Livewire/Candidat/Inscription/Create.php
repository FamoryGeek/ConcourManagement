<?php

namespace App\Http\Livewire\Candidat\Inscription;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\Specialite;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use App\Models\CompteCandidat;
use Illuminate\Support\Carbon;
use App\Mail\CandidatPasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Create extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $candidats;
    public $diplomes, $typeCandidats, $corps, $specialites, $localites;
    public $nina, $nom, $prenom, $dateNaissance, $lieuNaissance, $email, $adresse, $numero, $genre, $status, $diplome_id, $type_candidat_id, $corp_id, $specialite_id, $localite_id;
    public $diplomeImage, $certificatMedical, $ficheIndividuelle, $nina_image, $acteNaissance, $certificatNationalite, $lettreEquivalence;

    public function rules()
    {
        return [
            'nina' => ['required', 'string', 'regex:/^\d{14}[FH]$/'],
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'dateNaissance' => 'required|date',
            'lieuNaissance' => 'required|string',
            'email' => 'required|email|string',
            'adresse' => 'required|string',
            'numero' => 'required|string',
            'genre' => 'required|string',
            'status' => 'required|string',
            'diplome_id' => 'required|integer',
            'corp_id' => 'required|integer',
            'specialite_id' => 'required|integer',
            'localite_id' => 'required|integer',
            'type_candidat_id' => 'required|integer',
            'diplomeImage' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'certificatMedical' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'ficheIndividuelle' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'nina_image' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'acteNaissance' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'certificatNationalite' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'lettreEquivalence' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ];
    }
    public function nextStep()
    {
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function updated($fieldName)
    {
        $this->validateOnly($fieldName);
    }

    public function candidatSave()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            // Vérifier si le candidat existe déjà
            $existingCandidat = Candidat::where('nina', $this->nina)
                ->where('nom', $this->nom)
                ->where('prenom', $this->prenom)
                ->where('dateNaissance', $this->dateNaissance)
                ->where('lieuNaissance', $this->lieuNaissance)
                ->where('numero', $this->numero)
                ->where('email', $this->email)
                ->first();

            if ($existingCandidat) {
                toastr()->warning('Ce candidat existe déjà.');
                return redirect()->back(); // Arrêter l'exécution si le candidat existe déjà
            }

            // Enregistrement des images avec des noms uniques
            $images = [
                'diplomeImage', 'certificatMedical', 'ficheIndividuelle',
                'nina_image', 'acteNaissance', 'certificatNationalite', 'lettreEquivalence'
            ];

            $validatedData = [];

            foreach ($images as $imageName) {
                $imageNameToStore = Carbon::now()->timestamp . '_' . $this->{$imageName}->getClientOriginalName();
                $this->{$imageName}->storeAs('uploads/candidats/', $imageNameToStore);
                $validatedData[$imageName] = $imageNameToStore;
            }

            // Ajouter d'autres champs requis pour créer un candidat

            $validatedData['nina'] = $this->nina;
            $validatedData['nom'] = $this->nom;
            $validatedData['prenom'] = $this->prenom;
            $validatedData['dateNaissance'] = $this->dateNaissance;
            $validatedData['lieuNaissance'] = $this->lieuNaissance;
            $validatedData['email'] = $this->email;
            $validatedData['adresse'] = $this->adresse;
            $validatedData['numero'] = $this->numero;
            $validatedData['genre'] = $this->genre;
            $validatedData['status'] = $this->status;
            $validatedData['diplome_id'] = $this->diplome_id;
            $validatedData['corp_id'] = $this->corp_id;
            $validatedData['specialite_id'] = $this->specialite_id;
            $validatedData['localite_id'] = $this->localite_id;
            $validatedData['type_candidat_id'] = $this->type_candidat_id; // Assurez-vous d'attribuer une valeur à type_candidat_id

            // Création du candidat
            $candidat = Candidat::create($validatedData);


            // Générer un mot de passe aléatoire
            $password = $this->generatePassword(12);

            // Création du compte candidat associé
            $compteCandidat = [
                'password' => Hash::make($password),
                'passwordVerified' => Hash::make($password),
                'candidat_id' => $candidat->id
            ];


            CompteCandidat::create($compteCandidat);

             // Envoyer l'email au candidat
             $data=
             [
                'password' => $password,

             ];
             Mail::to($validatedData['email'])
             ->queue(new CandidatPasswordMail($data));

            //dd(Mail::to($this->email)->send(new CandidatPasswordMail($password, $this->email)));
            DB::commit();
            toastr()->success('Inscription effectuée avec succès. Un email contenant votre mot de passe a été envoyé.');
            return redirect('/candidat-login');
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->error('Erreur lors de l\'inscription : ' . $e->getMessage());
            return redirect()->back();
        }
    }



    // Méthode pour charger dynamiquement les spécialités en fonction du corps sélectionné
    public function loadSpecialites()
    {
        if (!empty($this->corp_id)) {
            $corp = Corp::find($this->corp_id);
            if ($corp) {
                $this->specialites = $corp->specialites;
            } else {
                $this->specialites = [];
            }
        } else {
            $this->specialites = [];
        }
    }

    public function updatedCorpId()
    {
        $this->loadSpecialites();
    }

    public function render()
    {
        $this->candidats = Candidat::get();
        $this->diplomes = Diplome::get();
        $this->typeCandidats = TypeCandidat::get();
        $this->corps = Corp::get();
        $this->localites = Localite::get();

        return view('livewire.candidat.inscription.create');
    }

    // Fonction pour générer un mot de passe aléatoire
    private function generatePassword($length = 12) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
