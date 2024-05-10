<?php

namespace App\Http\Livewire\Admin\Concour;

use App\Models\Corp;
use App\Models\Concour;
use Livewire\Component;
use App\Models\Candidat;

class Index extends Component
{
    public $concours;
    public $corps, $candidats;
    public $annee, $corp_id, $candidat_id,$concour_id;

    protected function rules()
    {
        return [
            'annee' => 'required|string|',
            'corp_id' => 'required|integer',
            'candidat_id' => 'required|integer'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
   /*  fonction ajouter */
    public function concourSave(){
        $validatedData = $this->validate();
        try {
            $concour = new Concour();
            $concour->annee = $validatedData['annee'];
            $concour->corp_id = $validatedData['corp_id'];
            $concour->candidat_id = $validatedData['candidat_id'];
            $concour->save();
            toastr()->success('Vous avez postuler avec success');
            return redirect('admin/concours');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/concours');
            //throw $th;
        }
    }

    //suppresssion
    public function deleteConcour(int $id){
        $concour = Concour::find($id);
        if($concour)
        {
            $this->concour_id= $id;
        }
    }

    public function destroyConcour(){
        try {
            $concour = Concour::find($this->concour_id);
            $concour->delete();
            toastr()->success('Candidature annuler avec sucess');
            return redirect('admin/concours');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/concours');
        }
    }


    public function render()
    {
        $this->concours = Concour::get();
        $this->corps = Corp::get();
        $this->candidats = Candidat::get();
        return view('livewire.admin.concour.index');
    }
}
