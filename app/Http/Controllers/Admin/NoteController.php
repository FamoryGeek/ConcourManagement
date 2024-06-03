<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $autorisation = $this->autorisation(Auth::user()->role, 'note.index');
        if ($autorisation == 'false') {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('admin.dashboard');
        }
        return view('admin.note.index');
    }

    public function create(){
        $autorisation = $this->autorisation(Auth::user()->role, 'note.index');
        if ($autorisation == 'false') {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('admin.dashboard');
        }
        return view('admin.note.create');
    }

    public function edit(){
        $autorisation = $this->autorisation(Auth::user()->role, 'note.index');
        if ($autorisation == 'false') {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('admin.dashboard');
        }
        return view('admin.note.edit');
    }

    public function show(){
        $autorisation = $this->autorisation(Auth::user()->role, 'note.index');
        if ($autorisation == 'false') {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('admin.dashboard');
        }
        return view('admin.note.show');
    }
}
