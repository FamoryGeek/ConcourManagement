<?php

namespace App\Http\Livewire\Admin\Resultat;

use App\Http\Livewire\Admin\Note\Show;
use Livewire\Component;
use App\Models\Candidat;
use Livewire\WithFileUploads;
class Index extends Component
{
    public $candidats;

    public function show(int $id){
        $candidat = Candidat::find($id);
        if ($candidat) {
            
        }
    }

    public function bloquer(){

    }

    public function debloquer(){

    }

    public function render()
    {

        $this->candidats = Candidat::whereIn('id', function($query) {
        $query->select('candidat_id')
            ->from('concours');
        })
        ->get();
        return view('livewire.admin.resultat.index');
    }
}
