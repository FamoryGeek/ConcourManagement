<?php

namespace App\Http\Livewire\Admin\Note;

use Locale;
use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Module;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\Specialite;

class Index extends Component
{
    public $annee;
    public $corp_id;
    public $localite_id;
    public $cadre_id;
    public $resultats;
    public $cadres, $localites, $corps, $specialites;
    protected $rules = [
        'cadre_id' => 'required|int',
    ];
    public function updated($fieldName)
    {
        $this->validateOnly($fieldName);
    }
    public function loadCorps()
    {
        if (!empty($this->cadre_id)) {
            $cadre = Cadre::find($this->cadre_id);
            if ($cadre) {
                $this->corps = $cadre->corps;
            } else {
                $this->corps = [];
            }
        } else {
            $this->corps = [];
        }
    }
    public function updatedCadreId()
    {
        $this->loadCorps();
    }

    public function render()
    {
        $this->cadres = Cadre::get();
        $this->localites = Localite::get();
        $this->specialites = Specialite::get();
        return view('livewire.admin.note.index');
    }
    public function rechercher()
    {
        // Effectuer la recherche dans la base de données avec les paramètres du formulaire
        $this->resultats = Candidat::where('corp_id', $this->corp_id)
            ->where('localite_id', $this->localite_id)
            ->get();
    }
}
