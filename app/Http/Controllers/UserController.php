<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){

        // validate the request
        $request->validate([
            'nama' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
        ]);

        // create a new user
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->role = $request->role ?? 'user';
        $user->password =  Hash::make(12345678);
        $user->save();

        return redirect()->route('user.index')->with('success','User berhasil ditambahkan');
    }

    public function index(){
        $users = User::all();
        return view('dashboard.admin.user-all', compact('users'));
    }
    
    // create
    public function create(){
        return view('dashboard.admin.create-user');
    }

    public function edit($id){
        $user = User::find($id);
        return view('dashboard.admin.edit-user', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->role = $request->role?? 'user';
        $user->save();

        return redirect()->route('user.index')->with('success','User berhasil diubah');
    }

    public function destroy($id){
        User::destroy($id);
        return redirect()->route('user.index')->with('success','User berhasil dihapus');
    }
}