<?php

namespace App\Http\Livewire\Admin\Categorie;

use App\Models\Categorie;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public $nom;
    public $categorie_id;

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

    public function saveCategorie()
    {
        $validatedData = $this->validate();
        try {
            $categorie = new Categorie();
            $categorie->nom = $validatedData['nom'];
            $categorie->save();
            toastr()->success('Categorie creer avec success');
            return redirect('admin/categories');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/categories');
        }
    }

    public function editCategorie(int $id)
    {
        $categorie = Categorie::find($id);
        if($categorie)
        {
            $this->categorie_id= $id;
            $this->nom = $categorie->nom;
        }
    }

    public function updateCategorie()
    {
        $validatedData = $this->validate();
        try {
            $categorie = Categorie::find($this->categorie_id);
            $categorie->nom = $validatedData['nom'];
            $categorie->save();
            toastr()->success('Categorie Modifié avec success');
            return redirect('admin/categories');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/categories');
        }
    }

    public function deleteCategorie(int $id){
        $categorie = Categorie::find($id);
        if($categorie)
        {
            $this->categorie_id= $id;
            $this->nom = $categorie->nom;
        }
    }

    public function destroyCategorie(){
        try {
            $categorie = Categorie::find($this->categorie_id);
            $categorie->delete();
            toastr()->success('Categorie suprimer avec success');
            return redirect('admin/categories');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/categories');
        }
    }

    public function render()
    {
        $this->categories = Categorie::get();
        return view('livewire.admin.categorie.index');
    }
}
