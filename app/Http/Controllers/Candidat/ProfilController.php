<?php

namespace App\Http\Controllers\Candidat;

use App\Models\Corp;
use App\Models\User;
use App\Models\Concour;
use App\Models\Diplome;
use App\Models\Candidat;
use App\Models\Localite;
use App\Models\Categorie;
use App\Models\Specialite;
use App\Models\TypeCandidat;
use Illuminate\Http\Request;
use App\Models\CompteCandidat;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        $candidats = Candidat::find(session('id'));
        $diplomes = Diplome::all();
        $typeCandidats = TypeCandidat::all();
        $corps = Corp::all();
        $localites = Localite::all();
        $specialites = Specialite::all();
        $categories = Categorie::all();
        return view('candidat.profil.index', compact('candidats', 'diplomes', 'typeCandidats', 'corps', 'localites', 'specialites', 'categories'));
    }

    public function edit()
    {
        return view('candidat.profil.index');
    }

    public function modifierCandidatProfil(Request $request)
    {
        // Récupération de l'ID du candidat à partir de la session
        $candidatId = session('id');

        // Vérification si l'ID du candidat existe dans la table Concours
        $concoursExist = Concour::where('candidat_id', $candidatId)->exists();

        if ($concoursExist) {
            // Si l'ID du candidat est trouvé dans la table Concours, il ne peut pas modifier
            toastr()->warning('Vous ne pouvez plus modifier vos informations');
            return redirect()->route('candidat.profil.index');
        }

        // Récupération du candidat en fonction de l'ID de la session
        $candidat = Candidat::find($candidatId);

        if ($candidat) {
            // Validation des données
            $validatedData = $request->validate([
                'nina' => ['required', 'string', 'regex:/^\d{14}[ABCDEFGHIJKLMNOPQRSTUVWXYZ]$/'],
                'nom' => 'required',
                'prenom' => 'required',
                'dateNaissance' => ['required', 'date', function ($attribute, $value, $fail) {
                    if (Carbon::parse($value)->age < 18) {
                        $fail('Le candidat doit avoir au moins 18 ans.');
                    }
                }],
                'lieuNaissance' => 'required',
                'email' => 'required|email',
                'adresse' => 'required',
                'numero' => 'required',
                'genre' => 'required',
                'status' => 'required',
                'diplomeImage' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
                'certificatMedical' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
                'ficheIndividuelle' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
                'nina_image' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
                'acteNaissance' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
                'certificatNationalite' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
                'lettreEquivalence' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
            ], [
                // Messages de validation personnalisés en français
                'nina.required' => 'Le champ NINA est obligatoire.',
                'nina.string' => 'Le champ NINA doit être une chaîne de caractères.',
                'nina.regex' => 'Le format du champ NINA est invalide.',
                'nom.required' => 'Le champ Nom est obligatoire.',
                'prenom.required' => 'Le champ Prénom est obligatoire.',
                'dateNaissance.required' => 'Le champ Date de naissance est obligatoire.',
                'dateNaissance.date' => 'Le champ Date de naissance doit être une date valide.',
                'lieuNaissance.required' => 'Le champ Lieu de naissance est obligatoire.',
                'email.required' => 'Le champ Email est obligatoire.',
                'email.email' => 'Le champ Email doit être une adresse email valide.',
                'adresse.required' => 'Le champ Adresse est obligatoire.',
                'numero.required' => 'Le champ Numéro est obligatoire.',
                'genre.required' => 'Le champ Genre est obligatoire.',
                'status.required' => 'Le champ Statut est obligatoire.',
                'diplomeImage.required' => 'Le champ Diplôme est obligatoire.',
                'diplomeImage.file' => 'Le Diplôme doit être un fichier.',
                'diplomeImage.mimes' => 'Le Diplôme doit être un fichier de type: jpg, jpeg, png, pdf.',
                'diplomeImage.max' => 'Le Diplôme ne doit pas dépasser 5 Mo.',
                'certificatMedical.file' => 'Le Certificat médical doit être un fichier.',
                'certificatMedical.mimes' => 'Le Certificat médical doit être un fichier de type: jpg, jpeg, png, pdf.',
                'certificatMedical.max' => 'Le Certificat médical ne doit pas dépasser 5 Mo.',
                'ficheIndividuelle.required' => 'Le champ Fiche individuelle est obligatoire.',
                'ficheIndividuelle.file' => 'La Fiche individuelle doit être un fichier.',
                'ficheIndividuelle.mimes' => 'La Fiche individuelle doit être un fichier de type: jpg, jpeg, png, pdf.',
                'ficheIndividuelle.max' => 'La Fiche individuelle ne doit pas dépasser 5 Mo.',
                'nina_image.required' => 'Le champ Image NINA est obligatoire.',
                'nina_image.file' => 'L\'Image NINA doit être un fichier.',
                'nina_image.mimes' => 'L\'Image NINA doit être un fichier de type: jpg, jpeg, png, pdf.',
                'nina_image.max' => 'L\'Image NINA ne doit pas dépasser 5 Mo.',
                'acteNaissance.required' => 'Le champ Acte de naissance est obligatoire.',
                'acteNaissance.file' => 'L\'Acte de naissance doit être un fichier.',
                'acteNaissance.mimes' => 'L\'Acte de naissance doit être un fichier de type: jpg, jpeg, png, pdf.',
                'acteNaissance.max' => 'L\'Acte de naissance ne doit pas dépasser 5 Mo.',
                'certificatNationalite.required' => 'Le champ Certificat de nationalité est obligatoire.',
                'certificatNationalite.file' => 'Le Certificat de nationalité doit être un fichier.',
                'certificatNationalite.mimes' => 'Le Certificat de nationalité doit être un fichier de type: jpg, jpeg, png, pdf.',
                'certificatNationalite.max' => 'Le Certificat de nationalité ne doit pas dépasser 5 Mo.',
                'lettreEquivalence.file' => 'La Lettre d\'équivalence doit être un fichier.',
                'lettreEquivalence.mimes' => 'La Lettre d\'équivalence doit être un fichier de type: jpg, jpeg, png, pdf.',
                'lettreEquivalence.max' => 'La Lettre d\'équivalence ne doit pas dépasser 5 Mo.',
            ]);


            try {
                // Traitement des fichiers
                $images = [
                    'diplomeImage', 'certificatMedical', 'ficheIndividuelle',
                    'nina_image', 'acteNaissance', 'certificatNationalite', 'lettreEquivalence'
                ];

                foreach ($images as $imageName) {
                    if ($request->hasFile($imageName)) {
                        $file = $request->file($imageName);
                        $fileNameToStore = $request->nina . '_' . $request->nom . '_' . Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
                        $file->storeAs('uploads/candidats/', $fileNameToStore);
                        $validatedData[$imageName] = $fileNameToStore;
                    }
                }

                // Mise à jour des attributs du candidat
                $candidat->update($validatedData);

                toastr()->success('Profil candidat modifié avec succès');
                return redirect()->route('candidat.profil.index');
            } catch (\Throwable $th) {
                toastr()->error('Une erreur est survenue : ' . $th->getMessage());
                return redirect()->route('candidat.profil.index');
            }
        } else {
            toastr()->warning('Candidat non trouvé');
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
