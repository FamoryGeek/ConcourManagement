<?php

namespace App\Http\Livewire\CandidatAuth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
  /*   public function saveLogin()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $agent = Agent::where('email', $validatedData['email'])->firstOrFail();
            $this->agentID = $agent->id;
            if ($agent->blocked == 1) {
                return back()->with(['error' => 'Votre compte est désactivé, veuillez contacter la GRH.']);
            }
            // Si l'agent a réussi à s'authentifier avec son ancien mot de passe
            if (Auth::guard('webagent')->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
                // Si le mot de passe a été changé mais le formulaire montre toujours le champ pour le nouveau mot de passe
                if ($agent->password_changed == false && $this->showInput) {
                    $this->validate([
                        'newpassword' => 'required|min:8|confirmed',
                    ]);
                    // Mettre à jour le mot de passe de l'agent avec le nouveau mot de passe
                    $agent->password = Hash::make($this->newpassword);
                    $agent->password_changed = true; // Marquer que le mot de passe a été changé
                    $agent->save();

                    // Rediriger l'agent vers le tableau de bord après la mise à jour du mot de passe
                    toastr()->success('Bienvenue sur OptiRH');
                    return redirect()->route('agent-dashboard');
                } else {
                    // Si le mot de passe a été changé mais le formulaire montre toujours le champ pour le nouveau mot de passe
                    if ($agent->password_changed == false) {
                        $this->showInput = true;
                        return;
                    } else {
                        // Réinitialiser les tentatives de connexion et rediriger vers le tableau de bord
                        $agent->resetLoginAttempts();
                        toastr()->success('Bienvenue sur OptiRH');
                        return redirect()->route('agent-dashboard');
                    }
                }
            } else {
                $agent->incrementLoginAttempts();

                if ($agent->login_attempts >= 3) {
                    $agent->blockAccount();
                    return back()->with(['error' => 'Votre compte a été bloqué en raison de trop de tentatives de connexion échouées.']);
                }
                return back()->with(['error' => 'L\'authentification a échoué']);
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return back()->with(['error' => 'Aucun agent trouvé avec cette adresse e-mail.']);
        }
    } */
    public function render()
    {
        return view('livewire.candidat-auth.login');
    }
}
