<?php

namespace App\Http\Controllers\AuthCandidat;

use App\Models\Concour;
use App\Models\Candidat;
use Illuminate\Http\Request;
use App\Models\CompteCandidat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

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
            toastr()->error('Adresse email non trouvée.');
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
            toastr()->error('Identifiants invalides.');
            return redirect()->back();
            /* return back()->withErrors([
                'email' => 'Identifiants invalides.',
            ]); */
        }

        // Vérifier si le mot de passe est correct
        if (!password_verify($request->password, $compteCandidat->password)) {
            toastr()->error('Mot de passe incorrect.');
            return redirect()->back();

            /* return back()->withErrors([

                'password' => 'Mot de passe incorrect.',
            ]); */
        }


        $changePassword = CompteCandidat::where('candidat_id', $candidat->id)->get();
        //dd($changePassword['0']->password_changed);
        if ($changePassword['0']->password_changed == 1) {
            // Authentification réussie
            Auth::login($candidat);

            // Stocker le nom et le prénom du candidat dans la session
            $request->session()->put('id', $candidat->id);
            $request->session()->put('nom', $candidat->nom);
            $request->session()->put('prenom', $candidat->prenom);
            $request->session()->put('corps', $candidat->corp_id);
            $request->session()->put('candidature', $candidat->corp->nom);

            // Récupérer l'heure actuelle
            $heure = date('H');

            // Vérifier si c'est le jour (entre 6h et 18h)
            if ($heure >= 6 && $heure < 18) {
                $message = "Bonjour";
            } else {
                $message = "Bonsoir";
            }
            $test = Concour::where('candidat_id',  $candidat->id)
                ->first();
            if ($test) {
                // Le candidat existe
                $request->session()->put('postuler', true);
            } else {
                // Le candidat n'existe pas
                $request->session()->put('postuler', false);
            }
            // Afficher le message
            toastr()->success('Bien le ' . $message . ' ' . $candidat->nom . ' ' . $candidat->prenom);
            return redirect()->intended('/candidat/dashboard');
        }else {
            // Authentification réussie
            //Auth::login($candidat);
            $candidat = CompteCandidat::where('candidat_id', $candidatId)->first();
            toastr()->warning('Vous devez changer votre mot de passe ');
            return redirect()->intended('/candidat-change-password/'.$changePassword['0']->candidat_id);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        toastr('info', 'Vous avez ete deconnecter');
        return redirect('/candidat-login');
    }

    public function changepassword($id)
    {
        $candidat = Candidat::find($id);
        return view('AuthCandidat.password-change',compact('candidat'));
    }

    public function change(Request $request)
    {
        //dd($request->id);
        $candidat = CompteCandidat::where('candidat_id', $request->id)->first();
        if (!$candidat) {
            toastr()->error('Candidat non trouvé');
            return redirect('/candidat-change-password'.$request->id);
        }
        //dd($request);
        if ($request->password != $candidat->password_confirmation) {
            toastr()->error('Mot de passe non identique');
            return redirect('/candidat-change-password/'.$request->id);
        }else {
            try {
                $candidat->password = Hash::make($request->password);
                $candidat->passwordVerified = Hash::make($request->password_confirmation);
                $candidat->password_changed = 1;
                $candidat->save();
                $candidat = Candidat::where('id', $request->id)->first();
                Auth::login($candidat);
                // Stocker le nom et le prénom du candidat dans la session
                $request->session()->put('id', $candidat->id);
                $request->session()->put('nom', $candidat->nom);
                $request->session()->put('prenom', $candidat->prenom);
                $request->session()->put('corps', $candidat->corp_id);
                $request->session()->put('candidature', $candidat->corp->nom);

                // Récupérer l'heure actuelle
                $heure = date('H');

                // Vérifier si c'est le jour (entre 6h et 18h)
                if ($heure >= 6 && $heure < 18) {
                    $message = "Bonjour";
                } else {
                    $message = "Bonsoir";
                }
                $test = Concour::where('candidat_id',  $candidat->id)
                    ->first();
                if ($test) {
                    // Le candidat existe
                    $request->session()->put('postuler', true);
                } else {
                    // Le candidat n'existe pas
                    $request->session()->put('postuler', false);
                }
                toastr()->success('Bien le ' . $message . ' ' . $candidat->nom . ' ' . $candidat->prenom);
                toastr()->success('Mot de passe mis à jour avec succès');
                toastr()->info('Veuillez charge les fichiers necessaire avent de postuler dans votre profile');
                return redirect()->intended('/candidat/dashboard');
            } catch (\Exception $e) {
                toastr()->error('Erreur lors de la mise à jour du mot de passe : ' . $e->getMessage());
                return redirect()->intended('/candidat-change-password'.$request->id);
            }
        }


    }
}
