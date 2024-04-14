<?php

namespace App\Http\Livewire\Admin\Programmation;

use App\Models\Centre;
use App\Models\Corp;
use App\Models\Programmation;
use Livewire\Component;

class Index extends Component
{
    public $programmations,$centres,$corps;
    public $corp_id,$centre_id,$programmation_id,$date;

    protected function rules()
    {
        return [
            'date' => 'required|date',
            'corp_id' => 'required|integer',
            'centre_id' => 'required|integer'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveProgrammation(){
        $validatedData = $this->validate();
        try {
            $programmation = new Programmation();
            $programmation->date = $validatedData['date'];
            $programmation->centre_id = $validatedData['centre_id'];
            $programmation->corp_id = $validatedData['corp_id'];
            $programmation->save();
            toastr()->success('Emploi du temps ajouter avec success');
            return redirect('admin/programmations');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/programmations');
            //throw $th;
        }
    }

    public function editProgrammation(int $id)
    {
        $programmation = Programmation::find($id);
        if($programmation)
        {
            $this->programmation_id = $id;
            $this->date  = $programmation->date;
            $this->centre_id = $programmation->centre_id;
            $this->corp_id = $programmation->corp_id;
        }
    }

    public function updateProgrammation(){
        $validatedData = $this->validate();
        try {
            $programmation = Programmation::find($this->programmation_id);
            $programmation->date = $validatedData['date'];
            $programmation->centre_id = $validatedData['centre_id'];
            $programmation->corp_id = $validatedData['corp_id'];
            $programmation->save();
            toastr()->success('Emploi du temps Modifier avec success');
            return redirect('admin/programmations');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/programmations');
            //throw $th;
        }
    }

    public function deleteProgrammation(int $id){
        $programmation = Programmation::find($id);
        if($programmation)
        {
            $this->programmation_id= $id;
        }
    }

    public function destroyProgrammation(){
        try {
            $programmation = Programmation::find($this->programmation_id);
            $programmation->delete();
            toastr()->success('Emploi du temps suprimer avec success');
            return redirect('admin/programmations');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/programmations');
        }
    }

    public function render()
    {
        $this->programmations = Programmation::get();
        $this->centres = Centre::get();
        $this->corps = Corp::get();
        return view('livewire.admin.programmation.index');
    }
}
