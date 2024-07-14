<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Candidat;
use App\Models\Specialite;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $cadre = Cadre::count();
        $corp = Corp::count();
        $specialite = Specialite::count();
        $candidat = Candidat::count();
        return view('welcome', compact('cadre', 'corp', 'specialite', 'candidat'));
    }
}
