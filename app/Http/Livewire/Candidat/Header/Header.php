<?php

namespace App\Http\Livewire\Candidat\Header;

use App\Models\Message;
use Livewire\Component;
use App\Models\Candidat;

class Header extends Component
{
    public $candidat,$nombre;
    public function render()
    {
        $this->nombre = Message::where('candidat_id', session('id'))
        ->count();
        $this->candidat = Candidat::where('id',session('id'))->get();
        return view('livewire.candidat.header.header');
    }
}
