<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Index extends Component
{
    public $users;
    public $role_type_user_id,$role,$roles,$role_name,$name,$email;
    public $user_id;
    protected function rules()
    {
        return [
            'name' => 'required|string|',
            'email' => 'required|email|',
            'role_type_user_id' => 'required|integer',
            'role' => 'required|integer',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function saveUser()
    {
        $validatedData = $this->validate();
        try {
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->role_type_user_id = $validatedData['role_type_user_id'];
            $user->role_id = $validatedData['role'];
            $user->password = Hash::make('password');
            $user->save();
            toastr()->success('Utilisateur creer avec success');
            return redirect('admin/users');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/users');
        }
    }

    public function editUser(int $id)
    {
        $user = User::find($id);
        if($user)
        {
            $this->user_id = $id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->role_type_user_id = $user->role_type_user_id;
            $this->role = $user->role_id;

        }
    }
    public function updateUser()
    {
        $validatedData = $this->validate();
        try {
            $user = User::find($this->user_id);
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->role_type_user_id = $validatedData['role_type_user_id'];
            $user->role_id = $validatedData['role'];
            $user->password = Hash::make('password');
            $user->save();
            toastr()->success('Utilisateur modifie avec success');
            return redirect('admin/cadres');
        } catch (\Throwable $th) {
            toastr()->error($th);
            return redirect('admin/cadres');
        }
    }
    public function render()
    {
        $this->users = User::get();
        $this->role_name = DB::table('role_type_users')->get();
        $this->roles = Role::where('type',1)->get();
        return view('livewire.admin.user.index');
    }
}
