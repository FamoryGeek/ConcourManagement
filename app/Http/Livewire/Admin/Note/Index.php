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
use App\Models\Session;
use App\Models\Specialite;

class Index extends Component
{
    public $annee,$sessions;

    protected $rules = [
        'annee' => 'required|int',
    ];

    public function render()
    {
        $this->sessions = Session::all();
        return view('livewire.admin.note.index');
    }

}
