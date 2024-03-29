<?php

namespace App\Http\Livewire\Admin\Header;

use App\Models\Type_droit;
use Livewire\Component;

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
    }
    public function render()
    {
        $this->types = Type_droit::get();
        return view('livewire.admin.header.header');
    }
}
