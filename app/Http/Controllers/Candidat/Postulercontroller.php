<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use App\Models\Concour;
use Illuminate\Http\Request;

class Postulercontroller extends Controller
{
    public function postuler(Request $request) {
        $concour = new Concour();
        $concour->annee = now()->format('Y');
        $concour->candidat_id = session('id');
        $concour->corp_id = session('corps');
        $concour->save();
        $request->session()->put('postuler', true);
        toastr()->success('Vous avez postuler avec success');
        return redirect('candidat/dashboard');
    }
    public function annuler(Request $request){

        $concour = Concour::where('candidat_id',  session('id'));
        $concour->delete();
            // $annuler =Concour::find($this->$concour[0]['id']);
            $request->session()->put('postuler', false);
           toastr()->success('Candidature annuler avec sucess');
            return redirect('candidat/dashboard');
    }
}
