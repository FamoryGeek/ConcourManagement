<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Categorie;
use App\Models\CompteCandidat;
use App\Models\Corp;
use App\Models\Diplome;
use App\Models\Localite;
use App\Models\Specialite;
use App\Models\TypeCandidat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index(){
        $candidats = Candidat::find(session('id'));
        $diplomes = Diplome::all();
        $typeCandidats = TypeCandidat::all();
        $corps = Corp::all();
        $localites = Localite::all();
        $specialites = Specialite::all();
        $categories = Categorie::all();
        return view('candidat.profil.index', compact('candidats','diplomes','typeCandidats','corps', 'localites','specialites','categories'));
    }

    public function edit()
    {
        return view('candidat.profil.index');
    }

    public function modifierCandidatProfil(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nina' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'dateNaissance' => 'required|date',
            'lieuNaissance' => 'required',
            'email' => 'required|email',
            'adresse' => 'required',
            'numero' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'diplomeImage' => 'nullable|image',
            'certificatMedical' => 'nullable|image',
            'ficheIndividuelle' => 'nullable|image',
            'nina_image' => 'nullable|image',
            'acteNaissance' => 'nullable|image',
            'certificatNationalite' => 'nullable|image',
            'lettreEquivalence' => 'nullable|image',
        ]);

        try {
            // Trouver le candidat par l'ID de la session
            $candidat = Candidat::find(session('id'));

            if (!$candidat) {
                toastr()->error('Candidat non trouvé');
                return redirect()->route('candidat.profil.index');
            }

            // Mettre à jour les attributs du candidat
            $candidat->update($validatedData);

            // Pour les fichiers, vérifiez s'ils existent dans la requête et mettez à jour séparément
            if ($request->hasFile('diplomeImage')) {
                $candidat->diplomeImage = $request->file('diplomeImage')->store('diplome_images');
            }
            if ($request->hasFile('certificatMedical')) {
                $candidat->certificatMedical = $request->file('certificatMedical')->store('certificat_medical');
            }
            if ($request->hasFile('ficheIndividuelle')) {
                $candidat->ficheIndividuelle = $request->file('ficheIndividuelle')->store('fiche_individuelle');
            }
            if ($request->hasFile('nina_image')) {
                $candidat->nina_image = $request->file('nina_image')->store('nina_images');
            }
            if ($request->hasFile('acteNaissance')) {
                $candidat->acteNaissance = $request->file('acteNaissance')->store('acte_naissance');
            }
            if ($request->hasFile('certificatNationalite')) {
                $candidat->certificatNationalite = $request->file('certificatNationalite')->store('certificat_nationalite');
            }
            if ($request->hasFile('lettreEquivalence')) {
                $candidat->lettreEquivalence = $request->file('lettreEquivalence')->store('lettre_equivalence');
            }
            //dd($candidat);

            $candidat->save();

            toastr()->success('Profil candidat modifié avec succès');
            return redirect()->route('candidat.profil.index');
        } catch (\Throwable $th) {
            toastr()->error('Une erreur est survenue : ' . $th->getMessage());
            return redirect()->route('candidat.profil.index');
        }
    }


    public function updatePassword(Request $request)
    {

        $candidat = CompteCandidat::where('candidat_id', session('id'))->first();
        if (!$candidat) {
            toastr()->error('Candidat non trouvé');
            return redirect()->route('candidat.profil.index');
        }

        if (!Hash::check($request->currentPassword, $candidat->password)) {
            toastr()->error('Mot de passe actuel incorrect');
            return redirect()->route('candidat.profil.index');
        }

        try {
            $candidat->password = Hash::make($request->password);
            $candidat->save();

            toastr()->success('Mot de passe mis à jour avec succès');

            return redirect()->route('candidat.profil.index');
        } catch (\Exception $e) {
            toastr()->error('Erreur lors de la mise à jour du mot de passe : ' . $e->getMessage());
            return redirect()->route('candidat.profil.index');
        }
    }
}
