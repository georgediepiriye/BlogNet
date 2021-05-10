<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Session;

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
       
         $user = User::where(['username'=>$request->username])->first();
         $request->session()->put('user',$user);


        return redirect()->route('dashboard');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'

        ]);
        $user = User::where([ 'username' => $request->username])->first();

        //if user doesnt exist in database or password isnt correct
        if(!$user || !Hash::check($request->password, $user->password)){
            return redirect(route('login'))->with('status','Invalid login details');
            die();
        }
        $request->session()->put('user',$user);
        return redirect(route('dashboard'));
    }

    public function logout(){
        Session::forget('user');
        return redirect(route('posts'));
    }
}
