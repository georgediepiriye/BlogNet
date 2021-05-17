@props(['post'=> $post])
<div class="post-container">
    <div class="left-post-item">
      <h3>{{$post->title}}</h3>
      By <a href="{{ route('user.posts',$post->user->username) }}">{{ $post->user->username }}</a>, posted <span>{{ $post->created_at->diffForHumans() }}</span>
      <p class="post-body">{{Str::words($post->body, $words=30, '...')  }}</p>
      <p>{{$post->category}}</p>
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
       @endif

    </div>
    <div class="right-post-item">
      <img class="post-image" src="{{asset('images/' .  $post->image)  }}" alt="">

    </div>
                      
</div>