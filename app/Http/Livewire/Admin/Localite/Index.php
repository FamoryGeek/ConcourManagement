<?php

namespace App\Http\Livewire\Admin\Localite;

use App\Models\Localite;
use Livewire\Component;

class Index extends Component
{
    public $localites;
    public $nom;
    public $localite_id;

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

    public function saveLocalite()
    {
        $validatedData = $this->validate();
        try {
            $localite = new Localite();
            $localite->nom = $validatedData['nom'];
            $localite->save();
            toastr()->success('Localité creer avec success');
            return redirect('admin/localites');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/localites');
        }
    }

    public function editLocalite(int $id)
    {
        $localite = Localite::find($id);
        if($localite)
        {
            $this->localite_id= $id;
            $this->nom = $localite->nom;
        }
    }

    public function updateLocalite()
    {
        $validatedData = $this->validate();
        try {
            $localite = Localite::find($this->localite_id);
            $localite->nom = $validatedData['nom'];
            $localite->save();
            toastr()->success('Localité Modifié avec success');
            return redirect('admin/localites');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/localites');
        }
    }

    public function deleteLocalite(int $id){
        $localite = Localite::find($id);
        if($localite)
        {
            $this->localite_id= $id;
            $this->nom = $localite->nom;
        }
    }

    public function destroyLocalite(){
        try {
            $localite = Localite::find($this->localite_id);
            $localite->delete();
            toastr()->success('Localité suprimer avec success');
            return redirect('admin/localites');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/localites');
        }
    }

    public function render()
    {
        $this->localites = Localite::orderBy('nom')->get();
        return view('livewire.admin.localite.index');
    }
}
