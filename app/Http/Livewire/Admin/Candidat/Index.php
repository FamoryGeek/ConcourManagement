<?php

namespace App\Http\Livewire\Admin\Candidat;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\TypeCandidat;

class Index extends Component
{
    public $candidats;
    public $diplomes,$typeCandidats,$corps;
    public function render()
    {
        $this->candidats = Candidat::get();
        $this->diplomes = Diplome::get();
        $this->typeCandidats = TypeCandidat::get();
        $this->corps = Corp::get();
        return view('livewire.admin.candidat.index');
    }
}
