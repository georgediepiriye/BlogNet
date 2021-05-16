<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
    
        return view('posts')->with('posts',Post::orderBy('updated_at','DESC')->with('user','likes')->paginate(10));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:60',
            'body'=>'required',
            'category'=>'required |in:sports,fashion,tech,politics',
            'image' =>'required|mimes:png,jpg,jpeg|max:5048'

        ]);
        $imageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
 
        $request->image->move(public_path('images'),$imageName);
       
       

        $request->user()->posts()->create([
            'title'=>$request->title,
            'body'=>$request->body,
            'category'=>$request->category,
            'image'=> $imageName

        ]);
        return redirect(route('posts'));



    }


    public function like(Post $post,Request $request){
        if($post->likedBy( $request->user())){
            return response(null,409);
        }
       
        $post->likes()->create([
            'user_id'=>$request->user()->id

        ]);
        return back();

    }

    public function unlike(Post $post,Request $request){
        $request->user()->likes()->where('post_id',$post->id)->delete();
        return back();

    }

    public function delete(Post $post){
     $post->delete();
     return back();

    }
}
