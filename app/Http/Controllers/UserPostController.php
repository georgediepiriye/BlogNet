<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    //
    public function index(User $user){
        $posts = $user->posts()->with(['user','likes'],Post::orderBy('updated_at','DESC'))->paginate(20);
 

        return view('user.posts.index',[
            'user'=>$user,
            'posts'=> $posts
        ]);
        

    }
}
