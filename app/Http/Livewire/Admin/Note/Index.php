<?php

namespace App\Http\Livewire\Admin\Note;

use Locale;
use App\Models\Corp;
use App\Models\Note;
use App\Models\Cadre;
use App\Models\Module;
use App\Models\Concour;
use App\Models\Session;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\Specialite;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $annee,$sessions;

    protected $rules = [
        'annee' => 'required|int',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function publier()
    {
        $validatedData = $this->validate();

        try {
            DB::beginTransaction();

            Note::where('annee', $validatedData['annee'])->update(['etat' => 1]);

            DB::commit();

            toastr()->success('Les résultats pour l\'année ' . $validatedData['annee'] . ' ont bien été publiés');
            return redirect('/admin/notes');
        } catch (\Throwable $th) {
            DB::rollBack();

            toastr()->error('Une erreur s\'est produite: ' . $th->getMessage());
            return redirect('/admin/notes');
        }
    }
    public function cacher()
    {
        $validatedData = $this->validate();

        try {
            DB::beginTransaction();

            Note::where('annee', $validatedData['annee'])->update(['etat' => 0]);

            DB::commit();

            toastr()->success('Les résultats pour l\'année ' . $validatedData['annee'] . ' ont bien été cachés');
            return redirect('/admin/notes');
        } catch (\Throwable $th) {
            DB::rollBack();

            toastr()->error('Une erreur s\'est produite: ' . $th->getMessage());
            return redirect('/admin/notes');
        }
    }


    public function render()
    {
        $this->sessions = Session::all();
        return view('livewire.admin.note.index');
    }

}
