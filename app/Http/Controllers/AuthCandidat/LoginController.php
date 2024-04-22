<?php

namespace App\Http\Controllers\AuthCandidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Candidat;
use App\Models\CompteCandidat;

class LoginController extends Controller
{
    public function index()
    {
        return view('AuthCandidat.login');
    }

    // Gérer la soumission du formulaire de connexion
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Vérifier si l'email existe dans la table Candidat
        $candidat = Candidat::where('email', $request->email)->first();

        if (!$candidat) {
            toastr()->info('Adresse email non trouvée.');
            return redirect()->back();
            /* return back()->withErrors([
                'email' => 'Adresse email non trouvée.',
            ]); */
        }

        // Récupérer l'ID du candidat
        $candidatId = $candidat->id;

        // Vérifier si l'ID du candidat existe dans la table CompteCandidat
        $compteCandidat = CompteCandidat::where('candidat_id', $candidatId)->first();

        if (!$compteCandidat) {
            toastr()->info('Identifiants invalides.');
            return redirect()->back();
            /* return back()->withErrors([
                'email' => 'Identifiants invalides.',
            ]); */
        }

        // Vérifier si le mot de passe est correct
        if (!password_verify($request->password, $compteCandidat->password)) {
            toastr()->info('Mot de passe incorrect.');
            return redirect()->back();

            /* return back()->withErrors([
                'password' => 'Mot de passe incorrect.',
            ]); */
        }

        // Authentification réussie
        Auth::login($candidat);

        // Stocker le nom et le prénom du candidat dans la session
        $request->session()->put('nom', $candidat->id);
        $request->session()->put('nom', $candidat->nom);
        $request->session()->put('prenom', $candidat->prenom);

        return redirect()->intended('/candidat/dashboard');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
