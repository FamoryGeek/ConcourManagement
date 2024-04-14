<?php

namespace App\Http\Livewire\Admin\Note;

use Locale;
use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Module;
use Livewire\Component;
use App\Models\Localite;

class Index extends Component
{
    public $cadres, $localites, $corps, $modules;
    public function render()
    {
        $this->cadres = Cadre::get();
        $this->localites = Localite::get();
        $this->corps = Corp::get();
        $this->modules = Module::get();
        return view('livewire.admin.note.index');
    }
}
