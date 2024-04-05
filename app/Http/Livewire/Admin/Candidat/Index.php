<?php

namespace App\Http\Livewire\Admin\Candidat;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class Index extends Component
{
    use WithFileUploads;
    public $afficherListeCandidat = true;
    public $afficherFormulaireCandidat = false;
    public $candidats;
    public $diplomes,$typeCandidats,$corps,$nina,$nom,$prenom,$dateNaissance,$lieuNaissance,$adresse,$tel,$genre,$status,$diplome_id,$typeCandidat_id,$corp_id,$diplomeImage,$ficheIndividuelleImage,$ninaImage,$acteNaissanceImage,$certificatNationaliteImage,$CertificatMedicalImage,$LettreEquivalenceImage;


    public function render()
    {
        $this->candidats = Candidat::get();
        $this->diplomes = Diplome::get();
        $this->typeCandidats = TypeCandidat::get();
        $this->corps = Corp::get();
        return view('livewire.admin.candidat.index');
    }
}
