<?php

namespace App\Http\Livewire\Admin\TypeCandidat;

use App\Models\TypeCandidat;
use Livewire\Component;

class Index extends Component
{

    public $typeCandidats;
    public $nom;
    public $typeCandidat_id;

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

    public function saveTypeCandidat()
    {
        $validatedData = $this->validate();
        try {
            $typeCandidat = new TypeCandidat();
            $typeCandidat->nom = $validatedData['nom'];
            $typeCandidat->save();
            toastr()->success('Type de Candidat creer avec success');
            return redirect('admin/typeCandidats');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/typeCandidats');
        }
    }

    public function editTypeCandidat(int $id)
    {
        $typeCandidat = TypeCandidat::find($id);
        if($typeCandidat)
        {
            $this->typeCandidat_id= $id;
            $this->nom = $typeCandidat->nom;
        }
    }

    public function updateModule()
    {
        $validatedData = $this->validate();
        try {
            $typeCandidat = TypeCandidat::find($this->typeCandidat_id);
            $typeCandidat->nom = $validatedData['nom'];
            $typeCandidat->save();
            toastr()->success('Type de Candidat modifié avec success');
            return redirect('admin/typeCandidats');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/typeCandidats');
        }
    }

    public function deleteTypeCandidat(int $id){
        $typeCandidat = TypeCandidat::find($id);
        if($typeCandidat)
        {
            $this->typeCandidat_id= $id;
            $this->nom = $typeCandidat->nom;
        }
    }

    public function destroyTypeCandidat(){
        try {
            $cadre = TypeCandidat::find($this->typeCandidat_id);
            $cadre->delete();
            toastr()->success('Type de candidat suprimer avec success');
            return redirect('admin/typeCandidats');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/typeCandidats');
        }
    }

    public function render()
    {
        $this->typeCandidats = TypeCandidat::orderBy('nom')->get();
        return view('livewire.admin.type-candidat.index');
    }
}
