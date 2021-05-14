<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::paginate(10);
        return view('posts',['posts'=>$posts]);
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'category'=>'required |in:sports,fashion,tech,politics',

        ]);


        $request->user()->posts()->create([
            'title'=>$request->title,
            'body'=>$request->body,
            'category'=>$request->category

        ]);
        return back();



    }
}
