<?php

namespace App\Http\Controllers\Candidat;

use App\Models\Concour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Candidat;

class Postulercontroller extends Controller
{
    public function postuler(Request $request)
    {
        try {
            $candidat = Candidat::find(session('id'));
            $fileDiplome = $candidat->diplomeImage;
            $fileIndividuelle = $candidat->ficheIndividuelle;
            $fileNationalite = $candidat->certificatNationalite;
            $fileActeNaissance = $candidat->acteNaissance;
            $fileNina = $candidat->nina_image;
            if ($fileActeNaissance !== null && $fileDiplome !== null && $fileIndividuelle !== null && $fileNationalite !== null && $fileNina !== null) {
                DB::beginTransaction();

                $concour = new Concour();
                $concour->annee = now()->format('Y');
                $concour->candidat_id = session('id');
                $concour->corp_id = session('corps');
                $concour->save();
                $request->session()->put('postuler', true);

                DB::commit();
                toastr()->success('Vous avez postuler avec success');
                return redirect('candidat/dashboard');
            }else{
                toastr()->error('error','Vous devez charger tous les fichier avant de postuler');
                return redirect('candidat/dashboard');
            }
        } catch (\Throwable $e) {
            DB::rollback();
            toastr()->error('Erreur lors de la postulation : ' . $e->getMessage());
            return redirect()->back();
        }
    }
    public function annuler(Request $request)
    {

        $concour = Concour::where('candidat_id',  session('id'));
        $concour->delete();
        // $annuler =Concour::find($this->$concour[0]['id']);
        $request->session()->put('postuler', false);
        toastr()->success('Candidature annuler avec sucess');
        return redirect('candidat/dashboard');
    }
}
