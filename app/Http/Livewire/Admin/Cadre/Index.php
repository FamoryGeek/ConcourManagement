<?php

namespace App\Http\Livewire\Admin\Cadre;

use App\Models\Cadre;
use Livewire\Component;

class Index extends Component
{
    public $cadres;
    public $nom;
    public $cadre_id;
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

    public function saveCadre()
    {
        $validatedData = $this->validate();
        try {
            $cadre = new Cadre();
            $cadre->nom = $validatedData['nom'];
            $cadre->save();
            toastr()->success('Cadre creer avec success');
            return redirect('admin/cadres');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/cadres');
        }
    }

    public function editCadre(int $id)
    {
        $cadre = Cadre::find($id);
        if($cadre)
        {
            $this->cadre_id= $id;
            $this->nom = $cadre->nom;
        }
    }

    public function updateCadre()
    {
        $validatedData = $this->validate();
        try {
            $cadre = Cadre::find($this->cadre_id);
            $cadre->nom = $validatedData['nom'];
            $cadre->save();
            toastr()->success('Cadre modifier avec success');
            return redirect('admin/cadres');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/cadres');
        }
    }

    public function deleteCadre(int $id){
        $cadre = Cadre::find($id);
        if($cadre)
        {
            $this->cadre_id= $id;
            $this->nom = $cadre->nom;
        }
    }

    public function destroyCadre(){
        try {
            $cadre = Cadre::find($this->cadre_id);
            $cadre->delete();
            toastr()->success('Cadre suprimer avec success');
            return redirect('admin/cadres');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/cadres');
        }
    }

    public function render()
    {
        $this->cadres = Cadre::get();
        return view('livewire.admin.cadre.index');
    }
}
