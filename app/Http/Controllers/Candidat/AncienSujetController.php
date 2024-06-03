<?php

namespace App\Http\Controllers\Candidat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AncienSujetController extends Controller
{
    public function index(){
        return view('candidat.anciens-sujets.index');
    }
}
