<?php

namespace App\Http\Livewire\Admin\Corp;

use App\Models\Corp;
use App\Models\Cadre;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Specialite;

class Index extends Component
{
    public $corps;
    public $corp_id;
    public $nom, $specialites,$cadres,$categories,$cadre_id,$categorie_id,$specialite_id;

    protected function rules()
    {
        return [
            'nom' => 'required|string|',
            'specialite_id' => 'required|string|',
            'cadre_id' => 'required|integer',
            'categorie_id' => 'required|integer'
        ];
    }


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveCorp()
    {
        $validatedData = $this->validate();
        try {
            $corp = new Corp();
            $corp->nom = $validatedData['nom'];
            $corp->specialite_id = $validatedData['specialite_id'];
            $corp->cadre_id = $validatedData['cadre_id'];
            $corp->categorie_id = $validatedData['categorie_id'];
            $corp->save();
            toastr()->success('Corp creer avec success');
            return redirect('admin/corps');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/corps');
        }
    }

    public function editCorp(int $id)
    {
        $corp = Corp::find($id);
        if($corp)
        {
            $this->corp_id = $id;
            $this->nom = $corp->nom;
            $this->specialite_id = $corp->specialite_id;
            $this->cadre_id = $corp->cadre_id;
            $this->categorie_id = $corp->categorie_id;
        }
    }

    public function updateCorp()
    {
        $validatedData = $this->validate();
        try {
            $corp = Corp::find($this->corp_id);
            $corp->nom = $validatedData['nom'];
            $corp->specialite_id = $validatedData['specialite_id'];
            $corp->cadre_id = $validatedData['cadre_id'];
            $corp->categorie_id = $validatedData['categorie_id'];
            $corp->save();
            toastr()->success('Corp modifié avec success');
            return redirect('admin/corps');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/corps');
        }
    }

    public function deleteCorp(int $id){
        $corp = Corp::find($id);
        if($corp)
        {
            $this->corp_id= $id;
            $this->nom = $corp->nom;
        }
    }

    public function destroyCorp(){
        try {
            $corp = Corp::find($this->corp_id);
            $corp->delete();
            toastr()->success('Corp suprimer avec success');
            return redirect('admin/corps');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/corps');
        }
    }

    public function render()
    {
        $this->corps = Corp::get();
        $this->cadres = Cadre::get();
        $this->specialites = Specialite::get();
        $this->categories = Categorie::get();
        return view('livewire.admin.corp.index');
    }
}
