<?php

namespace App\Http\Livewire\Candidat\Programmation;

use App\Models\Programmation;
use Livewire\Component;

class Index extends Component
{
    public $programmations;
    public function render()
    {
        $this->programmations = Programmation::where('corp_id', session('id'))->get();
        return view('livewire.candidat.programmation.index');
    }
}
