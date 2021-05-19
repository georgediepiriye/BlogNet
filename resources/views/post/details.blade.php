@extends('layout.master')
@section('content')

<div class="container post-container">
    <div class="row">
        <div class="col">
            <div class="card container">
                <h1 class="details-title user-posts-box">{{Str::ucfirst($post->title) }}</h1>
                By <a href="{{ route('user.posts',$post->user->username) }}">{{ $post->user->username }}</a>, posted <span>{{ $post->created_at->diffForHumans() }}</span>
        
                <h5 class="@if ($post->category==='tech')
                    {{ $class='tech-background' }}
                 @elseif ($post->category==='politics') 
                   {{  $class='politics-background' }}  
                 @elseif ($post->category==='sports') 
                    {{ $class='sports-background' }} 
                    @elseif ($post->category==='fashion') 
                   {{ $class='fashion-background'  }}       
                     
                 @endif">{{$post->category}}</h5>
                <img class="details-image" src="{{asset('images/' .  $post->image)  }}" alt=""><br> <br>
                <h4 class="line-spacing">{{ $post->body }}</h4><br><br>
    
                @if (Session::has('user'))
                     
                                     
                 
                 @if (!$post->likedBy(Auth::user()))
                     
                 <div class="float-child">
                     <form action="{{ route('posts.likes',$post) }}" method="post">
                         @csrf
                         <button type="submit" name="submit">Like</button>
                     </form>
                 </div>
                 @else
                 <div class="float-child">
                     <form action="{{ route('posts.likes',$post) }}" method="post">
                         @method('DELETE')
                         @csrf
                         <button name="submit">Unlike</button>
                     </form>
                 </div>
                 
                 @endif
                 
                 @endif  
            
                <span class="float-child">{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count() ) }}</span>
                @if (Session::has('user'))
                @if (Auth::user()->id===$post->user_id)
                        <div class="float-child" style="float: right">
                        
                            <form action="{{ route('post.delete',$post) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button name="submit">Delete Post</button>
                            </form>
                        </div>
                @endif
                @endif 

   

            </div>
            
        </div>
        

    </div>

</div>




        
               

{{--                 
                    <img class="details-image" src="{{asset('images/' .  $post->image)  }}" alt="">
              
            
                  
                    
                                    
                
              
                <div class="float-child">
                    <form action="{{ route('posts.likes',$post) }}" method="post">
                        @csrf
                        <button type="submit" name="submit">Like</button>
                    </form>
                </div>
              
                <div class="float-child">
                    <form action="{{ route('posts.likes',$post) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button name="submit">Unlike</button>
                    </form>
                </div>
               
                <span class="float-child">{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count() ) }}</span>
                @if (Auth::user())
                @if (Auth::user()->id===$post->user_id)
                        <div class="float-child">
                        
                            <form action="{{ route('post.delete',$post) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button name="submit">Delete Post</button>
                            </form>
                        </div>
                @endif
                @endif --}}
    

@endsection