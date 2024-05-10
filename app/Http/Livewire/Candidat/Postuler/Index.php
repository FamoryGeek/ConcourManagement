<?php

namespace App\Http\Livewire\Candidat\Postuler;

use Livewire\Component;

class Index extends Component
{
    public $id ;
    public function postuler(){
        $this->id = session('id');
    }

    public function annuler(){
        $this->id = session('id');
    }

    public function render()
    {
        //return view('livewire.candidat.postuler.index');
    }
}
