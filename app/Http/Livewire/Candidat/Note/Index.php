<?php

namespace App\Http\Livewire\Candidat\Note;

use App\Models\Candidat;
use Livewire\Component;

class Index extends Component
{
    public $resultats;
    public function render()
    {
        $this->resultats = Candidat::where('id', session('id'))
            ->whereIn('id', function($query) {
                $query->select('candidat_id')
                    ->from('notes')
                    ->where('etat', 1);
            })
            ->get();
            //dd($this->resultats);
        return view('livewire.candidat.note.index');
    }
}
