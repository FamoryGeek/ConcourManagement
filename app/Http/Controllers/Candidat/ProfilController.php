<?php

namespace App\Http\Controllers\Candidat;

use App\Models\Corp;
use App\Models\Diplome;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\TypeCandidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index(){
        $candidats = Candidat::find(session('id'));
        //dd($candidats);
        $diplomes = Diplome::all();
        $typeCandidats = TypeCandidat::all();
        $corps = Corp::all();
        $localites = Localite::all();
        return view('candidat.profil.index',compact('candidats','diplomes','typeCandidats','corps', 'localites'));
    }
}
