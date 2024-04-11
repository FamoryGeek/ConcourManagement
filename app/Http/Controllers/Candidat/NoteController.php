<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        return view('candidat.note.index');
    }
}
