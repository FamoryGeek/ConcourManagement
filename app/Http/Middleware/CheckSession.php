<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Vérifie si la session de l'utilisateur existe
        if (!Session::has('nom') || !Session::has('prenom')) {
            // Redirige l'utilisateur vers la page d'accueil
            toastr()->info('Vous avez été deconnecter');
            return redirect('/candidat-login');
        }
        return $next($request);
    }
}
