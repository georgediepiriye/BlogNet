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
       Auth::attempt(['email' => $request->email, 'password' => $request->password]);
    
         $request->session()->put('user',$user);


        return redirect()->route('dashboard');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        if(Auth::attempt($request->only('email','password'),$request->remember)){
                $user = User::where(['email'=>$request->email])->first();
                $request->session()->put('user',$user);
                return redirect(route('posts'));
            }else{
                return redirect(route('login'))->with('error','Invalid login details');
            }
        
    }


    public function logout(Request $request){
      $request->session()->forget('user');
        return redirect(route('posts'));
    }
}
