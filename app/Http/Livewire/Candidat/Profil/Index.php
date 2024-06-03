<?php

namespace App\Http\Livewire\Candidat\Profil;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\TypeCandidat;

class Index extends Component
{
    public $diplomes, $typeCandidats, $corps,$specialites,$localites;
    public $candidats;
    public $genre;
    public $status;
    public $diplome_id, $type_candidat_id, $corp_id, $specialite_id, $localite_id;
    public function candidat(){

    }

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

    public function updatedCorpId()
    {
        $this->loadSpecialites();
    }

    public function password(){
        
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
