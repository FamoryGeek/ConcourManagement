<?php

namespace App\Http\Livewire\Admin\Centre;

use App\Models\Centre;
use App\Models\Localite;
use Livewire\Component;

class Index extends Component
{
    public $centres;
    public $centre_id;
    public $nom,$localite_id,$localites;

    protected function rules()
    {
        return [
            'nom' => 'required|string|',
            'localite_id' => 'required|integer'
        ];
    }


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveCentre()
    {
            $validatedData = $this->validate();
            try {
                $centre = new Centre();
                $centre->nom = $validatedData['nom'];
                $centre->localite_id = $validatedData['localite_id'];
                $centre->save();
                toastr()->success('Centre creer avec success');
                return redirect('admin/centres');
            } catch (\Throwable $th) {
                toastr()->error($th);
                return redirect('admin/centres');
            }
    }

    public function editCentre(int $id)
    {
        $centre = Centre::find($id);
        if($centre)
        {
            $this->centre_id = $id;
            $this->nom = $centre->nom;
            $this->localite_id = $centre->localite_id;
        }
    }

    public function updateCentre()
    {
        $validatedData = $this->validate();
        try {
            $centre = Centre::find($this->centre_id);
            $centre->nom = $validatedData['nom'];
            $centre->localite_id = $validatedData['localite_id'];
            $centre->save();
            toastr()->success('Centres modifié  avec success');
            return redirect('admin/centres');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/centres');
        }
    }

    public function deleteCentre(int $id){
        $centre = Centre::find($id);
        if($centre)
        {
            $this->centre_id= $id;
            $this->nom = $centre->nom;
        }
    }

    public function destroyCentre(){
        try {
            $centre = Centre::find($this->centre_id);
            $centre->delete();
            toastr()->success('Centre suprimer avec success');
            return redirect('admin/centres');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/centres');
        }
    }

    public function render()
    {
        $this->centres = Centre::get();
        $this->localites = Localite::get();
        return view('livewire.admin.centre.index');
    }
}
