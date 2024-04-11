<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
   public function index(){
    return view('candidat.inscription.create');
   }
}
