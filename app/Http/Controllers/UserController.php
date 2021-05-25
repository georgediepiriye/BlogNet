<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Auth;

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
        
     auth()->attempt($request->only('email','password'));


        return redirect()->route('posts')->with('message','Hello there! you are now signed in');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

       if(!auth()->attempt($request->only('email','password'),$request->remember)){
           return redirect(route('login'))->with('error','Invalid Login Details');
       } ;
        return redirect(route('posts'))->with('message','Hello there! you are now signed in');

        
    }


    public function logout(){
        auth()->logout();
        
        return redirect(route('posts'));
    }
}
