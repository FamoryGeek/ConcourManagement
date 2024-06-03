<?php

namespace App\Http\Livewire\Admin\AnciensSujets;

use Livewire\Component;
use App\Models\AncienSujet;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithFileUploads;

    public $sujets, $titre, $description, $date_publication, $fichier, $sujet_id;
    public $isOpen = false;

    protected function rules()
    {
        return [
            'titre' => 'required|string',
            'fichier' => 'required|file|mimes:pdf,doc,docx',
            'description' => 'string',
            'date_publication' => 'required|date',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    private function resetInputFields()
    {
        $this->titre = '';
        $this->description = '';
        $this->date_publication = '';
        $this->fichier = '';
    }

    public function store(){
        $validatedData = $this->validate();

        try {
            $filePath = $this->fichier->store('anciens_sujets');
           $sujets = new AncienSujet();
           $sujets->titre = $validatedData['titre'];
           $sujets->description = $validatedData['description'];
           $sujets->date_publication = $validatedData['date_publication'];
           $sujets->fichier = $filePath;
           $sujets->save();
           toastr()->success('Sujet créé avec success');
           return redirect('admin/ancienSujets');
           $this->resetInputFields();
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/ancienSujets');
        }
    }

    public function edit(int $id){
        $sujet = AncienSujet::find($id);
        if ($sujet) {
            $this->sujet_id = $id;
            $this->titre = $sujet->titre;
            $this->description = $sujet->description;
            $this->date_publication = $sujet->date_publication;
            $this->fichier = $sujet->fichier;
        }

    }
    public function update(){
        $validatedData = $this->validate();

        try {
            $filePath = $this->fichier->store('anciens_sujets');
           $sujets =  AncienSujet::find($this->sujet_id);
           $sujets->titre = $validatedData['titre'];
           $sujets->description = $validatedData['description'];
           $sujets->date_publication = $validatedData['date_publication'];
           $sujets->fichier = $filePath;
           $sujets->save();
           toastr()->success('Sujet Sujet mis à jour avec success');
           return redirect('admin/ancienSujets');
           $this->resetInputFields();
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/ancienSujets');
        }
    }


    public function delete(int $id){
        $sujet = AncienSujet::find($id);
        if ($sujet) {
            $this->sujet_id = $id;
            $this->titre = $sujet->titre;
            $this->description = $sujet->description;
            $this->date_publication = $sujet->date_publication;
            $this->fichier = $sujet->fichier;
        }
    }
    public function destroy(){
        try {
            $cadre = AncienSujet::find($this->sujet_id);
            $cadre->delete();
            toastr()->success('Sujet suprimer avec success');
            return redirect('admin/ancienSujets');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/ancienSujets');
        }
    }
    public function render()
    {
        $this->sujets = AncienSujet::all();
        return view('livewire.admin.anciens-sujets.index');
    }

    public function download($id)
    {
        $sujet = AncienSujet::findOrFail($id);
        return Storage::download($sujet->fichier);
    }
}
