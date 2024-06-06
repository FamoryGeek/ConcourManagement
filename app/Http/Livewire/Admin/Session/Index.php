<?php

namespace App\Http\Livewire\Admin\Session;

use App\Models\Session;
use Livewire\Component;

class Index extends Component
{
    public $sessions;
    public $annee, $etat,$session_id;

    protected function rules()
    {
        return [
            'annee' => 'required|string|',
            'etat' => 'required|boolean|'
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save(){
        $validatedData = $this->validate();
        try {
            $cadre = new Session();
            $cadre->annee = $validatedData['annee'];
            $cadre->etat = $validatedData['etat'];
            $cadre->save();
            toastr()->success('Session creer avec success',"Felicitations");
            return redirect('admin/sessions');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/sessions');
        }
    }

    public function edit(int $id)
    {
        $session = Session::find($id);
        if($session)
        {
            $this->session_id= $id;
            $this->annee = $session->annee;
            $this->etat = $session->etat;

        }
    }

    public function update()
    {
        $validatedData = $this->validate();
        try {
            $session = Session::find($this->session_id);
            $session->annee = $validatedData['annee'];
            $session->etat = $validatedData['etat'];
            $session->save();
            toastr()->success('Session modifier avec success',"Felications");
            return redirect('admin/sessions');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/sessions');
        }
    }

    public function delete(int $id){
        $session = Session::find($id);
        if($session)
        {
            $this->session_id= $id;
            $this->annee = $session->annee;
            $this->etat = $session->etat;
        }
    }

    public function destroy(){
        try {
            $session = Session::find($this->session_id);
            $session->delete();
            toastr()->success('Session suprimer avec success',"Felicitation");
            return redirect('admin/sessions');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/sessions');
        }
    }

    public function render()
    {
        $this->sessions = Session::all();
        return view('livewire.admin.session.index');
    }
}
