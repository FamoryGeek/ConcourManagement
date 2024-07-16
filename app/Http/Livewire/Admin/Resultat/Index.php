<?php

namespace App\Http\Livewire\Admin\Resultat;


use Carbon\Carbon;
use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Session;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Specialite;
use Livewire\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Admin\Note\Show;

class Index extends Component
{
    public $candidats,$cadres,$corps,$specialites,$sessions;
    public  $session,$cadre_id,$corp_id,$specialite_id,$nombre,$pdf;
    public $resultats = [];
    protected $rules = [
        'cadre_id' => 'required|int',
        'corp_id' => 'required|int',
        'specialite_id' => 'required|int',
        'session' => 'required|int',
        'nombre' => 'required|int',
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

    public function show(int $id)
    {
        $candidat = Candidat::find($id);
        if ($candidat) {
        }
    }

    public function bloquer()
    {
    }

    public function debloquer()
    {
    }

    public function rechercher(){
        $validatedData = $this->validate([
            'nombre' => 'required|integer',
            'session' => 'required|integer',
        ]);

        $this->nombre = $validatedData['nombre'];
        $this->resultats = Candidat::where('candidats.etat', 2)
            ->where('candidats.corp_id', $this->corp_id)
            ->where('candidats.specialite_id', $this->specialite_id)
            ->whereIn('candidats.id', function($query) {
                $query->select('concours.candidat_id')
                    ->from('concours')
                    ->where('concours.annee', $this->session);
            })
            ->whereIn('candidats.id', function($query) {
                $query->select('notes.candidat_id')
                    ->from('notes');
            })
            ->join('notes', 'candidats.id', '=', 'notes.candidat_id')
            ->select('candidats.*', DB::raw('((notes.epreuveTechnique + notes.cultureGeneral) / 2) as moyenne'))
            ->orderBy('moyenne', 'desc')
            ->take($this->nombre)
            ->get();

        //dd($this->resultats);
    }
    public function generatePDF()
    {
        $session = $this->session;
        $cadre = Cadre::where('id', $this->cadre_id)->pluck('nom')->first();
        $corp =  Corp::where('id', $this->corp_id)->pluck('nom')->first();
        $specialite = Specialite::where('id', $this->specialite_id)->pluck('nom')->first();
        $nombre = $this->nombre;

        $pdf = PDF::loadView('pdf.resultats', [
            'resultats' => $this->resultats,
            'session' => $session,
            'specialite' => $specialite,
            'cadre' => $cadre,
            'nombre' => $nombre,
            'corp' => $corp
        ]);

        return response()->stream(
            function () use ($pdf) {
                echo $pdf->output();
            },
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="resultats.pdf"',
            ]
        );
    }


    public function render()
    {
        $this->cadres = Cadre::all();
        $this->sessions = Session::all();
        return view('livewire.admin.resultat.index');
    }
}
