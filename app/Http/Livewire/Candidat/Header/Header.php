<?php

namespace App\Http\Livewire\Candidat\Header;

use Livewire\Component;
use App\Models\Candidat;

class Header extends Component
{
    public $candidat;
    public function render()
    {
        $this->candidat = Candidat::where('id',session('id'))->get();
        return view('livewire.candidat.header.header');
    }
}
