<?php

namespace App\Http\Livewire\Admin\ParametreSelection;

use App\Models\Corp;
use App\Models\Session;
use Livewire\Component;
use App\Models\ParamSelection;

class Index extends Component
{
    public $nombre, $corp_id, $session_id, $parametreSelection_id;
    public $parametreSelections, $corps =[], $sessions;

    protected function rules()
    {
        return [
            'nombre' => 'required|integer|',
            'corp_id' => 'required|integer|',
            'session_id' => 'required|integer|',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save(){
        $validatedData = $this->validate();
        try {
            $parametreSelection = new ParamSelection();
            $parametreSelection->nombre = $validatedData['nombre'];
            $parametreSelection->corp_id = $validatedData['corp_id'];
            $parametreSelection->session_id = $validatedData['session_id'];
            $parametreSelection->save();
            toastr()->success('Parametre ajouter avec success','Successful');
            return redirect('admin/parametreSelection');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/parametreSelection');
        }
    }

    public function edit(int $id)
    {
        $parametreSelection = ParamSelection::find($id);
        if($parametreSelection)
        {
            $this->parametreSelection_id= $id;
            $this->nombre = $parametreSelection->nombre;
            $this->corp_id = $parametreSelection->corp_id;
            $this->session_id = $parametreSelection->session_id;
        }
    }

    public function update()
    {
        $validatedData = $this->validate();
        try {
            $parametreSelection = ParamSelection::find($this->parametreSelection_id);
            $parametreSelection->nombre = $validatedData['nombre'];
            $parametreSelection->corp_id = $validatedData['corp_id'];
            $parametreSelection->session_id = $validatedData['session_id'];
            $parametreSelection->save();
            toastr()->success('Parametre modifier avec success','Successful');
            return redirect('admin/parametreSelection');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/parametreSelection');
        }
    }

    public function mount()
    {
        $this->sessions = Session::all();
        // Initialiser avec tous les corps ou selon vos besoins
    }

    public function updatedSessionId($value)
    {
        $this->filterCorps($value);
    }

    public function filterCorps($sessionId)
    {
        // Obtenir les corps déjà enregistrés dans la session sélectionnée
        $alreadySelectedCorpIds = ParamSelection::where('session_id', $sessionId)
            ->pluck('corp_id')
            ->toArray();

        // Filtrer les corps qui ne sont pas déjà sélectionnés
        $this->corps = Corp::whereNotIn('id', $alreadySelectedCorpIds)->get();
    }




    public function render()
    {
        $this->parametreSelections = ParamSelection::all();
        $this->sessions = Session::get();
        return view('livewire.admin.parametre-selection.index');
    }
}
