<?php

namespace App\Http\Livewire\Admin\Note;

use Locale;
use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Module;
use App\Models\Concour;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\Note;
use App\Models\Specialite;

class Index extends Component
{
    public $annee,$candidats;
    public $corp_id;
    public $specialite_id;
    public $localite_id;
    public $cadre_id;
    public $resultats;
    public $cadres, $localites, $corps, $specialites;
    public $cultureGeneral, $epreuveTechnique;
    protected $rules = [
        'cadre_id' => 'required|int',
        'corp_id' => 'required|int',
        'localite_id' => 'required|int',
        'specialite_id' => 'required|int',
        'annee' => 'required|int',
        'epreuveTechnique' => 'required|int',
        'cultureGeneral' => 'required|int',

    ];
    public function updated($fieldName)
    {
        $this->validateOnly($fieldName);
    }

    // Méthode pour charger dynamiquement les corps en fonction du cadre sélectionné

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

    public function rechercher()
    {
        $validatedData = $this->validate([
            'annee' => 'required|integer', // Utilisez 'integer' au lieu de 'int' pour les règles de validation Laravel
        ]);
        $this->annee = $validatedData['annee'];
        /* $this->candidats = Candidat::whereIn('id', function($query) {
            $query->select('candidat_id')
                ->from('concours')
                ->where('annee', 2024);
        })->get(); */
        // Effectuer la recherche dans la base de données avec les paramètres du formulaire
        $this->resultats = Candidat::where('corp_id', $this->corp_id)
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

    // sauvegarder des note
    public function saveNote(){
        $validatedData = $this->validate();
        try {
            $notes = new Note();
            $notes->annee = $validatedData['annee'];
            $notes->epreuveTechnique = $validatedData['epreuveTechnique'];
            $notes->cultureGeneral = $validatedData['cultureGeneral'];
            $notes->candidat_id = session('id');
            //dd($notes);
            $notes->save();
            toastr()->success('Notes ajouter avec success');
            return redirect('admin/notes');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/notes');
        }
    }


    public function render()
    {
        $this->cadres = Cadre::get();
        $this->localites = Localite::get();
        /* $this->specialites = Specialite::get(); */
        return view('livewire.admin.note.index');
    }

}
