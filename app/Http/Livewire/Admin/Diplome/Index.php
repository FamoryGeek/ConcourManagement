<?php

namespace App\Http\Livewire\Admin\Diplome;

use App\Models\Diplome;
use Livewire\Component;

class Index extends Component
{
    public $diplomes;
    public $nom;
    public $diplome_id;

    protected function rules()
    {
        return [
            'nom' => 'required|string|'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveDiplome()
    {
        $validatedData = $this->validate();
        try {
            $diplome = new Diplome();
            $diplome->nom = $validatedData['nom'];
            $diplome->save();
            toastr()->success('Diplôme creer avec success');
            return redirect('admin/diplomes');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/diplomes');
        }
    }

    public function editDiplome(int $id)
    {
        $diplome = Diplome::find($id);
        if($diplome)
        {
            $this->diplome_id= $id;
            $this->nom = $diplome->nom;
        }
    }

    public function updateDiplome()
    {
        $validatedData = $this->validate();
        try {
            $diplome = Diplome::find($this->diplome_id);
            $diplome->nom = $validatedData['nom'];
            $diplome->save();
            toastr()->success('Diplome Modifié avec success');
            return redirect('admin/diplomes');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/diplomes');
        }
    }

    public function deleteDiplome(int $id){
        $diplome = Diplome::find($id);
        if($diplome)
        {
            $this->diplome_id= $id;
            $this->nom = $diplome->nom;
        }
    }

    public function destroyDiplome(){
        try {
            $diplome = Diplome::find($this->diplome_id);
            $diplome->delete();
            toastr()->success('Diplôme suprimer avec success');
            return redirect('admin/diplomes');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/diplomes');
        }
    }

    public function render()
    {
        $this->diplomes = Diplome::orderBy('nom')->get();
        return view('livewire.admin.diplome.index');
    }
}
