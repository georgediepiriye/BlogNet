@props(['post'=> $post])

    <div class="row card">
        <div class="card">
            <div class="col-sm-5">
                <a href="{{ route('post.details',$post) }}"> 
                    <h3  class="post-title"><b>{{Str::ucfirst($post->title) }}</b></h3>
                </a>

                By <a href="{{ route('user.posts',$post->user->username) }}">{{ $post->user->username }}</a>, posted <span>{{ $post->created_at->diffForHumans() }}</span>
                <p class="post-body">{{ Str::words($post->body, $words=20, '...')  }}</p>
                
                
                    
                
                
                

                <h5 class="@if ($post->category==='tech')
                    {{ $class='tech-background' }}
                @elseif ($post->category==='politics') 
                {{  $class='politics-background' }}  
                @elseif ($post->category==='sports') 
                    {{ $class='sports-background' }} 
                    @elseif ($post->category==='fashion') 
                {{ $class='fashion-background'  }}       
                    
                @endif">{{$post->category}}</h5>
                @auth 
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
                    @endauth
                   
                      <span class="float-child likes-count">{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count() ) }}</span>
                      @auth   
                            @if (auth()->user()->id===$post->user_id)
                                    <div class="float-child">
                                    
                                        <form action="{{ route('post.delete',$post) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button name="submit">Delete</button>
                                        </form>
                                    </div>
                                    @endauth  
                      
                  @endauth


            </div>
        <div class="col">
        <img class="post-image" src="{{asset('images/' .  $post->image)  }}" alt="">

        </div>
 
 

        </div>
        
           
       

    </div>