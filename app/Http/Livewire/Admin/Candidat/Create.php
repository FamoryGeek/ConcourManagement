<?php

namespace App\Http\Livewire\Admin\Candidat;

use App\Models\Corp;
use App\Models\Diplome;
use Livewire\Component;
use App\Models\Candidat;
use App\Models\TypeCandidat;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class Create extends Component
{
    use WithFileUploads;
    public $step = 1;
    public $candidats;
    public $diplomes,$typeCandidats,$corps,$nina,$nom,$prenom,$dateNaissance,$lieuNaissance,$adresse,$tel,$genre,$status,$diplome_id,$typeCandidat_id,$corp_id,$diplomeImage,$ficheIndividuelleImage,$ninaImage,$acteNaissanceImage,$certificatNationaliteImage,$certificatMedicalImage,$LettreEquivalenceImage;

    public function nextStep()
    {
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    protected function rules()
    {
        return [
            'nina' => 'required|string',
            'nom' => 'required|string|',
            'prenom' => 'required|string|',
            'dateNaissance' => 'required',
            'lieuNaissance' => 'required|string|',
            'adresse' => 'required|string|',
            'tel' => 'required|string|',
            'genre' => 'required|string|',
            'status' => 'required|string|',
            'diplome_id' => 'required|integer|',
            'corp_id' => 'required|integer|',
            'typeCandidat_id' => 'required|integer|',
             'diplomeImage' => 'required|file|mimes:jpg,jpeg,png,pdf',
            /* 'diplomeImage' => 'required|mimes:png,jpg,jpeg|',
            'certificatMedicalImage' => 'required|mimes:png,jpg,jpeg|',
            'ficheIndividuelleImage' => 'required|mimes:png,jpg,jpeg|',
            'ninaImage' => 'required|mimes:png,jpg,jpeg|',
            'acteNaissanceImage' => 'required|mimes:png,jpg,jpeg|',
            'certificatNationaliteImage' => 'required|mimes:png,jpg,jpeg|',
            'lettreEquivalenceImage' => 'required|mimes:png,jpg,jpeg|',
            'acteNaissanceImage' => 'required|mimes:png,jpg,jpeg|' */
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function candidatSave(){
        $validatedData = $this->validate();
        $candidat = new Candidat();
            $imageName = Carbon::now()->timestamp . 'diplome.' . $this->diplomeImage->extension();
            $this->diplomeImage->storeAs('uploads/candidats/', $imageName);
            $candidat->diplomeImage = $imageName;
            $candidat->nina = $validatedData['nina'];
            $candidat->nom = $validatedData['nom'];
            $candidat->prenom = $validatedData['prenom'];
            $candidat->adresse = $validatedData['adresse'];
            $candidat->dateNaissance = $validatedData['dateNaissance'];
            $candidat->lieuNaissance = $validatedData['lieuNaissance'];
            $candidat->genre = $validatedData['genre'];
            $candidat->numero = $validatedData['tel'];
            $candidat->status = $validatedData['status'];
            //$candidat->diplomeImage = $validatedData['diplomeImage'];
            $candidat->diplome_id = $validatedData['diplome_id'];
            $candidat->type_candidat_id = $validatedData['typeCandidat_id'];
            $candidat->corp_id = $validatedData['corp_id'];
            $candidat->ficheIndividuelle = "test";
            $candidat->lettreEquivalence = "test";
            $candidat->certificatNationalite = "test";
            $candidat->acteNaissance = "test";
            $candidat->certificatMedical = "test";
            $candidat->nina_image = "test";
            //dd($candidat);
            $candidat->save();
            toastr()->success('Inscription avec success');
            return redirect('admin/candidats');

    }

    public function render()
    {
        $this->candidats = Candidat::get();
        $this->diplomes = Diplome::get();
        $this->typeCandidats = TypeCandidat::get();
        $this->corps = Corp::get();
        return view('livewire.admin.candidat.create');
    }
}
