<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $request->validate([
            'username'=> 'required|unique:users|regex:/(^[a-zA-Z]*$)/|min:2|max:20',
            'email'=>'required|unique:users,email',
            'password'=>'required|confirmed'

        ]);

        $user = User::create([
            'username'=>$request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        return redirect()->route('dashboard');
    }
}
