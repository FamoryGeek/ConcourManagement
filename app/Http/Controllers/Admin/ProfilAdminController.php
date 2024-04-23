<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.profils.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('admin.profils.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $users= User::find(Auth::user()->id);
        // $request->validate([
        //     'name' => 'required',
        //      'email' => 'required',
        //      'password' => 'required',
        //      'photo' => 'mimes:jpeg, png, jpg, svg',
        //     'telephone' => 'required',
        // ]);
        if($request->hasFile("photo")){
            $photo = $request->file("photo");
            $ext = $photo->getClientOriginalExtension();
            $autorise = ["png", "jpg", "svg", "jpeg"];
            if(! in_array(strtolower($ext), $autorise)){
                return back()->with("error", "Choissisez une photo");
            }
            $profile_name = time(). '.' . $ext;
            $photo->move(public_path('storage/photo'),$profile_name);
        }
        $users->name = $request->name;
        $users->email = $request->email;
        $users->photo= $profile_name;
        $users->telephone = $request->telephone;
        $users->save();
        // dd($users);
        toastr()->success('le profil a ete modifier avec succes', 'Succes');
        return redirect()->route('adminprofil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
