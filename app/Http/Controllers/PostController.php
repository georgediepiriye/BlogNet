<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('posts');
    }

    public function store(Request $request){
        $request->validate([
            'body'=>'required',
            'category'=>'required |in:sports,fashion,tech,politics',

        ]);



    }
}
