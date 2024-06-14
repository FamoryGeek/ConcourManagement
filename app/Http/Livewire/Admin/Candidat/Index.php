<?php

namespace App\Http\Livewire\Admin\Candidat;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class Index extends Component
{
    use WithFileUploads;

    public $candidats;



    public function render()
    {
    $this->candidats = Candidat::where('etat', 1)
        ->whereIn('id', function($query) {
        $query->select('candidat_id')
            ->from('concours');
        })
        ->get();
        return view('livewire.admin.candidat.index');
    }
}
