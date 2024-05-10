<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Concour;
use Illuminate\Support\Facades\Auth;

class CandidatController extends Controller
{
    public function verifierPostulation($candidat_id)
    {
        $aDejaPostule = Concour::where('candidat_id', $candidat_id)->exists();

        return response()->json(['aDejaPostule' => $aDejaPostule]);
    }
    public function index()
    {
        $autorisation = $this->autorisation(Auth::user()->role, 'candidat.index');
        if ($autorisation == 'false') {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('admin.dashboard');
        }
        return view('admin.candidat.index');
    }
    public function create()
    {
        $autorisation = $this->autorisation(Auth::user()->role, 'candidat.index');
        if ($autorisation == 'false') {
            toastr()->info('Vous n\'avez pas le droit d\'acceder à ces ressources', 'Tentative échoué');
            return redirect()->route('admin.dashboard');
        }
        return view('admin.candidat.create');
    }
}
