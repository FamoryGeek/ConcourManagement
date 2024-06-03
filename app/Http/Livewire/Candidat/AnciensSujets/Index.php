<?php

namespace App\Http\Livewire\Candidat\AnciensSujets;

use Livewire\Component;
use App\Models\AncienSujet;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    public $sujets;
    public $search = '';

    public function render()
    {
        $this->sujets = AncienSujet::where('titre', 'like', '%' . $this->search . '%')->get();
        return view('livewire.candidat.anciens-sujets.index');
    }

    public function download($id)
    {
        $sujet = AncienSujet::findOrFail($id);
        return Storage::download($sujet->fichier);
    }
}

