<?php

namespace App\Http\Livewire\Admin\Note;

use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\Note;
use Livewire\Component;

class Create extends Component
{
    public $annee;
    public $cadre_id;
    public $corp_id;
    public $specialite_id;
    public $localite_id;
    public $resultats = [];
    public $cadres, $localites, $corps, $specialites;
    public $cultureGeneral = [];
    public $epreuveTechnique = [];

    protected $rules = [
        'cadre_id' => 'required|int',
        'corp_id' => 'required|int',
        'localite_id' => 'required|int',
        'specialite_id' => 'required|int',
        'annee' => 'required|int',
        'epreuveTechnique.*' => 'required|numeric',
        'cultureGeneral.*' => 'required|numeric',
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

        $this->resultats = Candidat::where('etat', 2)
            ->where('corp_id', $this->corp_id)
            ->where('localite_id', $this->localite_id)
            ->where('specialite_id', $this->specialite_id)
            ->whereIn('id', function($query) {
                $query->select('candidat_id')
                    ->from('concours')
                    ->where('annee', $this->annee);
            })
            ->whereDoesntHave('note')
            ->get();
    }

    public function saveNote()
    {
        $this->validate();

        foreach ($this->resultats as $candidat) {
            Note::updateOrCreate(
                ['candidat_id' => $candidat->id],
                [
                    'annee' => $this->annee,
                    'epreuveTechnique' => $this->epreuveTechnique[$candidat->id],
                    'cultureGeneral' => $this->cultureGeneral[$candidat->id],
                ]
            );
        }

        toastr()->success('Notes ajouter avec success');
        return redirect()->route('note.index');
    }

    public function render()
    {
        $this->cadres = Cadre::all();
        $this->localites = Localite::all();
        return view('livewire.admin.note.create');
    }
}
