<?php

namespace App\Http\Livewire\Admin\Note;

use App\Models\Corp;
use App\Models\Note;
use App\Models\Cadre;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Localite;

class Show extends Component
{
    public $annee;
    public $cadre_id;
    public $corp_id;
    public $specialite_id;
    public $resultats = [];
    public  $notes, $cadres, $corps, $specialites, $localites;

    protected $rules = [
        'cadre_id' => 'required|int',
        'corp_id' => 'required|int',
        /* 'localite_id' => 'required|int', */
        'specialite_id' => 'required|int',
        'annee' => 'required|int',
    ];

    public function updated($fieldName)
    {
        $this->validateOnly($fieldName);
    }

    public function loadCorps()
    {
        if (!empty($this->cadre_id)) {
            $cadre = Cadre::find($this->cadre_id);
            $this->corps = $cadre ? $cadre->corps : [];
        } else {
            $this->corps = [];
        }
    }

    public function updatedCadreId()
    {
        $this->loadCorps();
    }

    public function loadSpecialites()
    {
        if (!empty($this->corp_id)) {
            $corp = Corp::find($this->corp_id);
            $this->specialites = $corp ? $corp->specialites : [];
        } else {
            $this->specialites = [];
        }
    }
    public function updatedCorpId()
    {
        $this->loadSpecialites();
    }

    public function rechercher()
    {
        $validatedData = $this->validate([
            'annee' => 'required|integer',
        ]);

        $this->annee = $validatedData['annee'];

        $this->resultats = Candidat::where('corp_id', $this->corp_id)
            ->where('specialite_id', $this->specialite_id)
            ->where('etat', 2)
            ->whereIn('id', function($query) {
                $query->select('candidat_id')
                    ->from('concours')
                    ->where('annee', $this->annee);
            })
            ->whereHas('note')
            ->get();
    }

    public function render()
    {
        $this->cadres = Cadre::all();
        $this->localites = Localite::all();
        return view('livewire.admin.note.show');
    }
}
