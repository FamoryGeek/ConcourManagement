<?php

namespace App\Http\Livewire\Admin\Header;

use Livewire\Component;
use App\Models\Type_droit;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $types;
    public  $type_id;
    public function type(int $id)
    {
        // dd($id);
        $this->emit("type_droit", $id);
        $this->type_id = $id;
        session()->put("type", $this->type_id);
        if (Auth::user()->role->id == null ) {
            return redirect()->route('login');
        }
    }
    public function render()
    {
        $this->types = Type_droit::get();
        return view('livewire.admin.header.header');
    }
}
