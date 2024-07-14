<?php

namespace App\Http\Livewire\Candidat\Profil;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\CompteCandidat;
use App\Models\Localite;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Database\collectio

class Index extends Component
{

    public $diplomes,
        $categorie_id,
        $typeCandidats,
        $corps,
        $specialites,
        $localites;
    public $candidats;
    public $diplome_id,
        $type_candidat_id,
        $corp_id,
        $candidat_id,
        $specialite_id,
        $localite_id;
    public $nina,
        $nom,
        $prenom,
        $dateNaissance,
        $lieuNaissance,
        $email,
        $adresse,
        $numero,
        $genre,
        $status;
    public $diplomeImage,
        $certificatMedical,
        $ficheIndividuelle,
        $nina_image,
        $acteNaissance,
        $certificatNationalite,
        $lettreEquivalence;
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;

    use WithFileUploads;

    public function loadSpecialites()
    {
        $this->candidats = Candidat::find(session('id'));
        $this->corp_id = $this->candidats->corp_id;
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

    protected $rules = [
        'nina' => 'required|string',
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
        'diplomeImage' => 'file|mimes:jpg,jpeg,png,pdf',
        'certificatMedical' => 'file|mimes:jpg,jpeg,png,pdf',
        'ficheIndividuelle' => 'file|mimes:jpg,jpeg,png,pdf',
        'nina_image' => 'file|mimes:jpg,jpeg,png,pdf',
        'acteNaissance' => 'file|mimes:jpg,jpeg,png,pdf',
        'certificatNationalite' => 'file|mimes:jpg,jpeg,png,pdf',
        'lettreEquivalence' => 'file|mimes:jpg,jpeg,png,pdf',
        'currentPassword' => 'required',
        'newPassword' => 'required|min:6|different:currentPassword',
        'confirmPassword' => 'required|same:newPassword'
    ];

    public function updatedCorpId()
    {
        $this->loadSpecialites();
    }

    public function mount($id)
    {
        $candidat = Candidat::find($id);

        if ($candidat) {
            $this->categorie_id = $candidat->id;
            $this->nina = $candidat->nina;
            $this->nom = $candidat->nom;
            $this->prenom = $candidat->prenom;
            $this->dateNaissance = $candidat->dateNaissance;
            $this->lieuNaissance = $candidat->lieuNaissance;
            $this->email = $candidat->email;
            $this->adresse = $candidat->adresse;
            $this->numero = $candidat->numero;
            $this->genre = $candidat->genre;
            $this->status = $candidat->status;
            $this->diplomeImage = $candidat->diplomeImage;
            $this->certificatMedical = $candidat->certificatMedical;
            $this->ficheIndividuelle = $candidat->ficheIndividuelle;
            $this->nina_image = $candidat->nina_image;
            $this->acteNaissance = $candidat->acteNaissance;
            $this->certificatNationalite = $candidat->certificatNationalite;
            $this->lettreEquivalence = $candidat->lettreEquivalence;
        } else {
            toastr()->error('Candidat non trouvé');
            return redirect()->route('candidat.profil.index');
        }
    }


    public function modifierCandidatProfil()
    {

        //$this->validate();
        try {
            $candidat = Candidat::find($this->categorie_id);

            if (!$candidat) {
                toastr()->error('Candidat non trouvé');
                return redirect()->route('candidat.profil.index');
            }

            $candidat->nina = $this->nina;
            $candidat->nom = $this->nom;
            $candidat->prenom = $this->prenom;
            $candidat->dateNaissance = $this->dateNaissance;
            $candidat->lieuNaissance = $this->lieuNaissance;
            $candidat->email = $this->email;
            $candidat->adresse = $this->adresse;
            $candidat->numero = $this->numero;
            $candidat->genre = $this->genre;
            $candidat->status = $this->status;
            $candidat->diplomeImage = $this->diplomeImage;
            $candidat->certificatMedical = $this->certificatMedical;
            $candidat->ficheIndividuelle = $this->ficheIndividuelle;
            $candidat->nina_image = $this->nina_image;
            $candidat->acteNaissance = $this->acteNaissance;
            $candidat->certificatNationalite = $this->certificatNationalite;
            $candidat->lettreEquivalence = $this->lettreEquivalence;

            $candidat->save();

            toastr()->success('Profil candidat modifié avec succès');
            return redirect()->route('candidat.profil.index');
        } catch (\Throwable $th) {
            toastr()->error('Une erreur est survenue : ' . $th->getMessage());
            return redirect()->route('candidat.profil.index');
        }
    }

    public function updatePassword()
{
    // Validate the inputs
    // $this->validate([
    //     'currentPassword' => 'required', // Current password is required
    //     'newPassword' => 'required|min:6|confirmed',  // New password is required, min 6 characters, confirmation required
    // ]);

    // Find the candidate by ID
    $candidat = CompteCandidat::where('candidat_id', session('id'))->get();
    //dd($candidat[0]->password);

    // Check if the candidate exists
    if (!$candidat) {
        toastr()->error('Candidat non trouvé');
        return redirect()->route('candidat.profil.index');
    }

    // Check if the current password is correct
    if (!(Hash::check($this->currentPassword, $candidat[0]->password))) {
        toastr()->error('Mot de passe actuel incorrect');
        return redirect()->route('candidat.profil.index');
    }

    // Update the password
    try {
        $candidat[0]->password = Hash::make($this->newPassword);
        //dd($candidat);
        $candidat[0]->save();

        toastr()->success('Mot de passe mis à jour avec succès');  // Reset the form

        // Redirect after success
        return redirect()->route('candidat.profil.index');
    } catch (\Exception $e) {
        toastr()->error('Erreur lors de la mise à jour du mot de passe : ' . $e->getMessage());
        return redirect()->route('candidat.profil.index');
    }
}


    public function render()
    {
        $this->diplomes = Diplome::get();
        $this->typeCandidats = TypeCandidat::get();
        $this->corps = Corp::get();
        $this->localites = Localite::get();
        $this->candidats = Candidat::find(session('id'));
        //dd($this->candidats);
        $this->status = $this->candidats->status;
        //dd($this->status);
        $this->genre = $this->candidats->genre;
        $this->diplome_id = $this->candidats->diplome_id;
        $this->type_candidat_id = $this->candidats->type_candidat_id;
        $this->corp_id = $this->candidats->corp_id;
        $this->specialite_id = $this->candidats->specialite_id;
        $this->localite_id = $this->candidats->localite_id;


        return view('livewire.candidat.profil.index');
    }
}
