<?php

namespace App\Http\Livewire\Candidat\Inscription;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use App\Models\CompteCandidat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $candidats;
    public $diplomes, $typeCandidats, $corps;
    public $nina, $nom, $prenom, $dateNaissance, $lieuNaissance, $adresse, $numero, $genre, $status, $diplome_id, $type_candidat_id, $corp_id;
    public $diplomeImage, $certificatMedical, $ficheIndividuelle, $nina_image, $acteNaissance, $certificatNationalite, $lettreEquivalence;

    protected $rules = [
        'nina' => 'required|string',
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'dateNaissance' => 'required|date',
        'lieuNaissance' => 'required|string',
        'adresse' => 'required|string',
        'numero' => 'required|string',
        'genre' => 'required|string',
        'status' => 'required|string',
        'diplome_id' => 'required|integer',
        'corp_id' => 'required|integer',
        'type_candidat_id' => 'required|integer',
        'diplomeImage' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'certificatMedical' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'ficheIndividuelle' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'nina_image' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'acteNaissance' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'certificatNationalite' => 'required|file|mimes:jpg,jpeg,png,pdf',
        'lettreEquivalence' => 'required|file|mimes:jpg,jpeg,png,pdf',
        // Ajoutez d'autres règles de validation pour les images ici
    ];

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
        $validatedData = $this->validate();

        DB::beginTransaction();

        try {
            // Vérifier si le candidat existe déjà
            $existingCandidat = Candidat::where('nina', $validatedData['nina'])
            ->where('nom', $validatedData['nom'])
            ->where('prenom', $validatedData['prenom'])
            ->where('dateNaissance', $validatedData['dateNaissance'])
            ->where('lieuNaissance', $validatedData['lieuNaissance'])
            ->where('numero', $validatedData['numero'])
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

            foreach ($images as $imageName) {
                $imageNameToStore = Carbon::now()->timestamp . '_' . $this->{$imageName}->getClientOriginalName();
                $this->{$imageName}->storeAs('uploads/candidats/', $imageNameToStore);
                $validatedData[$imageName] = $imageNameToStore;
            }

            // Création du candidat
            $candidat = Candidat::create($validatedData);

            // Création du compte candidat associé
            $compteCandidat = [
                'password' => Hash::make('password'),
                'passwordVerified' => Hash::make('password'),
                'candidat_id' => $candidat->id
            ];

            CompteCandidat::create($compteCandidat);

            DB::commit();
            toastr()->success('Inscription effectuée avec succès');
            return redirect('candidat/dashboard');
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->error('Erreur lors de l\'inscription : ' . $e->getMessage());
            return redirect()->back();

        }
    }

    public function render()
    {
        $this->candidats = Candidat::get();
        $this->diplomes = Diplome::get();
        $this->typeCandidats = TypeCandidat::get();
        $this->corps = Corp::get();

        return view('livewire.candidat.inscription.create');
    }
}
