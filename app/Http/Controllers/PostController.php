<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::get();
        return view('posts',['posts'=>$posts]);
    }

    public function store(Request $request){
        $request->validate([
            'body'=>'required',
            'category'=>'required |in:sports,fashion,tech,politics',

        ]);


        $request->user()->posts()->create([
            'body'=>$request->body,
            'category'=>$request->category

        ]);
        return back();



    }
}
