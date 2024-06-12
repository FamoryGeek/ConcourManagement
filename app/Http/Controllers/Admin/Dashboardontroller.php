<?php

namespace App\Http\Controllers\Admin;

use App\Models\Corp;
use App\Models\Cadre;
use App\Models\Candidat;
use App\Models\Specialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboardontroller extends Controller
{
    public function index()
    {
        $cadre = Cadre::count();
        $corp = Corp::count();
        $specialite = Specialite::count();
        $candidat = Candidat::count();
        //dd($cadre, $corp, $specialite, $candidat);
        return view('admin.dashboard', compact('cadre','corp','specialite','candidat'));
    }
    public function gestionnaire(){
        return view('gestionnaire.dashboard');
    }
    public function candidat(){
        return view('candidat.dashboard');
    }
}
