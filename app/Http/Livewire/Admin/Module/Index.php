<?php

namespace App\Http\Livewire\Admin\Module;

use App\Models\Module;
use Livewire\Component;

class Index extends Component
{
    public $modules;
    public $nom;
    public $module_id;

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

    public function saveModule()
    {
        $validatedData = $this->validate();
        try {
            $module = new Module();
            $module->nom = $validatedData['nom'];
            $module->save();
            toastr()->success('Module creer avec success');
            return redirect('admin/modules');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/modules');
        }
    }

    public function editModule(int $id)
    {
        $module = Module::find($id);
        if($module)
        {
            $this->module_id= $id;
            $this->nom = $module->nom;
        }
    }

    public function updateModule()
    {
        $validatedData = $this->validate();
        try {
            $module = Module::find($this->module_id);
            $module->nom = $validatedData['nom'];
            $module->save();
            toastr()->success('Module modifié avec success');
            return redirect('admin/modules');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/modules');
        }
    }

    public function deleteModule(int $id){
        $module = Module::find($id);
        if($module)
        {
            $this->module_id= $id;
            $this->nom = $module->nom;
        }
    }

    public function destroyModule(){
        try {
            $module = Module::find($this->module_id);
            $module->delete();
            toastr()->success('Module suprimer avec success');
            return redirect('admin/modules');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/modules');
        }
    }

    public function render()
    {
        $this->modules = Module::get();
        return view('livewire.admin.module.index');
    }
}
