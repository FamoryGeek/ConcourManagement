<?php

namespace App\Http\Livewire\Admin\Specialite;

use App\Models\Corp;
use App\Models\Specialite;
use Livewire\Component;

class Index extends Component
{
    public $corps, $specialites;
    public $nom, $corp_id,$specialite_id;

    protected function rules()
    {
        return [
            'nom' => 'required|string|',
            'corp_id' => 'required|integer'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveSpecialite(){
        $validatedData = $this->validate();
        try {
            $centre = new Specialite();
            $centre->nom = $validatedData['nom'];
            $centre->corp_id = $validatedData['corp_id'];
            $centre->save();
            toastr()->success('Specialite creer avec success');
            return redirect('admin/specialites');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/specialites');
        }
    }

    public function editSpecialite(int $id){
        $specialite = Specialite::find($id);
        if($specialite)
        {
            $this->specialite_id = $id;
            $this->nom = $specialite->nom;
            $this->corp_id = $specialite->corp_id;
        }
    }

    public function updateSpecialite()
    {
        $validatedData = $this->validate();
        try {
            $specialite = Specialite::find($this->specialite_id);
            $specialite->nom = $validatedData['nom'];
            $specialite->corp_id = $validatedData['corp_id'];
            $specialite->save();
            toastr()->success('Specialité modifié  avec success');
            return redirect('admin/specialites');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/specialites');
        }
    }

    public function deleteSpecialite(int $id){
        $specialite = Specialite::find($id);
        if($specialite)
        {
            $this->specialite_id= $id;
            $this->nom = $specialite->nom;
        }
    }

    public function destroyCentre(){
        try {
            $specialite = Specialite::find($this->specialite_id);
            $specialite->delete();
            toastr()->success('Specialité suprimer avec success');
            return redirect('admin/specialites');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/specialites');
        }
    }

    public function render()
    {
        $this->specialites = Specialite::orderBy('nom')->get();
        $this->corps = Corp::orderBy('nom')->get();
        return view('livewire.admin.specialite.index');
    }
}
