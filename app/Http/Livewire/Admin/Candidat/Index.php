<?php

namespace App\Http\Livewire\Admin\Candidat;

use App\Models\Corp;
use App\Models\Diplome;
use App\Models\Message;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithFileUploads;

    public $candidats, $candidat, $candidat_id, $description;
    public $diplomeExt, $ficheIndividuelleExt, $nationaliteExt, $acteNaissanceExt, $certificatMedicalExt, $ninaExt, $lettreEquivalenceExt;

    protected function rules()
    {
        return [
            'description' => 'required|string|'
        ];
    }

    public function viewFile(int $id)
    {
        $this->candidat = Candidat::find($id);
        $diplome = $this->candidat->diplomeImage;
        $ficheIndividuelle = $this->candidat->ficheIndividuelle;
        $nationalite = $this->candidat->certificatNationalite;
        $acteNaissance = $this->candidat->acteNaissance;
        $cerficatMedical = $this->candidat->certificatMedical;
        $nina = $this->candidat->nina_image;
        $lettreEquivalence = $this->candidat->lettreEquivalence;
        $this->diplomeExt = pathinfo($diplome, PATHINFO_EXTENSION);
        $this->ficheIndividuelleExt = pathinfo($ficheIndividuelle, PATHINFO_EXTENSION);
        $this->nationaliteExt = pathinfo($nationalite, PATHINFO_EXTENSION);
        $this->acteNaissanceExt = pathinfo($acteNaissance, PATHINFO_EXTENSION);
        $this->certificatMedicalExt = pathinfo($cerficatMedical, PATHINFO_EXTENSION);
        $this->ninaExt = pathinfo($nina, PATHINFO_EXTENSION);
        $this->lettreEquivalenceExt = pathinfo($lettreEquivalence, PATHINFO_EXTENSION);

        //dd(pathinfo($file, PATHINFO_EXTENSION));
    }

    public function rejeter(int $id)
    {
        $candidat = Candidat::find($id);
        if ($candidat) {
            $this->candidat_id = $id;
        }
    }

    public function confirmerRejet()
    {
        $validatedData = $this->validate();
        try {
            DB::beginTransaction();
            $candidat = Candidat::find($this->candidat_id);
            $candidat->etat = 0;
            $candidat->save();
            //dd($candidat->etat);
            $message = new Message();
            $message->candidat_id = $this->candidat_id;
            $message->description = $validatedData['description'];
            $message->save();
            DB::commit();
            toastr()->success('Success', 'le candidat bien été rejeter ');
            return redirect('admin/candidats');
        } catch (\Throwable $th) {
            DB::rollback();
            toastr()->error($th);
            return redirect('admin/candidats');
        }
    }
    public function valider($id)
    {
        try {
            DB::beginTransaction();
            $candidat = Candidat::find($id);
            $candidat->etat = 2;
            $candidat->save();
            $message = new Message();
            $message->candidat_id = $id;
            $message->description = "Votre candidature a bien été Valider";
            $message->save();
            DB::commit();
            toastr()->success('success', 'La candidat a bien été valider');
            return redirect('admin/candidats');
        } catch (\Throwable $th) {
            DB::rollback();
            toastr()->error($th);
            return redirect('admin/candidats');
        }
    }

    public function render()
    {
        $this->candidats = Candidat::whereIn('id', function ($query) {
            $query->select('candidat_id')
                ->from('concours');
        })
            ->get();
        return view('livewire.admin.candidat.index');
    }
}
