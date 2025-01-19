<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){

        dd($request->all());
        // validate the request
        $request->validate([
            'nama' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'role' => ['nullable','string','in:admin,user'],
        ]);

        // create a new user
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->role = $request->role ?? 'user';
        $user->password =  Hash::make(12345678);
        $user->save();


    }
}