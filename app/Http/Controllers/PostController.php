<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use PDO;

class PostController extends Controller
{
    //function to get all posts
    public function index(){
        $posts = Post::orderBy('updated_at','DESC')->with('user','likes')->paginate(20);
        $populars = Post::withCount('likes')
        ->orderBy('likes_count', 'desc')->with('user')
        ->paginate(3);
        
    
        return view('posts',[
            'posts'=>$posts,
            'populars'=>$populars
            ]);
    }

    
//funtion to create new post
    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:100',
            'body'=>'required',
            'category'=>'required |in:sports,fashion,tech,politics',
            'image' =>'required|mimes:png,jpg,jpeg|max:5048'

        ]);
        
        $imageName = time() . '-' . $request->username . '-' . $request->image->extension();
        $request->image->move(public_path('images'),$imageName);
       
       

        $request->user()->posts()->create([
            'title'=>$request->title,
            'body'=>$request->body,
            'category'=>$request->category,
            'image'=> $imageName

        ]);
        return redirect(route('posts'))->with('message','Post has been posted successfully!');



    }

//funtion to like a post
    public function like(Post $post,Request $request){
        if($post->likedBy( $request->user())){
            return response(null,409);
        }
       
        $post->likes()->create([
            'user_id'=>$request->user()->id

        ]);
            return back();
    }

    


//funcction to unlike a post
    public function unlike(Post $post,Request $request){
        $request->user()->likes()->where('post_id',$post->id)->delete();
        return back();

    }

//function to delete a post 
    public function delete(Post $post){
     $post->delete();
     return back();

    }

  //function to show a single post  
    public function show(Post $post){
        return view('post.details',[
            'post'=> $post
        ]);
    }

//function to show all sports posts
     public function showSports(){
         $posts = Post::where('category','sports')->paginate(20);
         return view('post.sports',[
             'posts'=>$posts
         ]);
     }

//function to show all fashion posts 
     public function showFashion(){
        $posts = Post::where('category','fashion')->paginate(20);
        return view('post.fashion',[
            'posts'=>$posts
        ]);
    }
    
 //function to show all tech posts   
    public function showTech(){
        $posts = Post::where('category','tech')->paginate(20);
        return view('post.tech',[
            'posts'=>$posts
        ]);
    }

 //function to show all politics posts
    public function showPolitics(){
        $posts = Post::where('category','politics')->paginate(20);
        return view('post.politics',[
            'posts'=>$posts
        ]);
    }

    

   

}
