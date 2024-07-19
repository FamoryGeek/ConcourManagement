<?php

namespace App\Http\Livewire\Candidat\Programmation;

use App\Models\Programmation;
use Livewire\Component;

class Index extends Component
{
    public $programmations;
    public function render()
    {
        $this->programmations = Programmation::where('corp_id', session('corps'))->get();
        //dd( $this->programmations);
        return view('livewire.candidat.programmation.index');
    }
}
