@extends('layout.master')
@section('content')
<div class="container post-container">
    
    <div class="col-sm-12 col-sm-offset-1">
        <h2>Blog Posts</h2>
        @if (Session::has('user'))
       
         <a href="{{ route('createpost') }}" class="btn btn-primary create-post-button">Create Post</a>
        
          
       @endif
        @if ($posts->count())
            @foreach ($posts as $post)
              <div class="post-container">
                  <div class="left-post-item">
                    <h3>{{$post->title}}</h3>
                    By <a href="">{{ $post->user->username }}</a>, posted <span>{{ $post->created_at->diffForHumans() }}</span>
                    <p class="post-body">{{Str::words($post->body, $words=20, '...')  }}</p>
                    <p>{{$post->category}}</p>
                    @if (!$post->likedBy(Auth::user()))
                        
                    <div class="float-child">
                        <form action="{{ route('posts.likes',$post->id) }}" method="post">
                            @csrf
                            <button type="submit" name="submit">Like</button>
                        </form>
                     </div>
                     @else
                     <div class="float-child">
                        <form action="{{ route('posts.likes',$post->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button name="submit">Unlike</button>
                        </form>
                     </div>
                     @endif
                     <span class="float-child">{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count() ) }}</span>

                  </div>
                  <div class="right-post-item">
                    <img class="post-image" src="{{asset('images/' .  $post->image)  }}" alt="">

                  </div>
                                    
              </div>
              <hr>
              
            @endforeach
            {{ $posts->links() }}

            
        @else
             <h2>There are no Posts</h2>
            
        @endif

    </div>
</div>
@endsection