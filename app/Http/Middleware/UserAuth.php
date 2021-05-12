<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //sends user directly to home page if user is already logged in
        if($request->path()==='login' && $request->session()->has('user')===true){
            return redirect(route('dashboard'));
 
         }
 
         if($request->path()==='dashboard' && $request->session()->has('user')===false){
             return redirect(route('login'));
  
          }
 
          if($request->path()==='register' && $request->session()->has('user')){
             return redirect(route('dashboard'));
  
          }
        return $next($request);
    }
}
