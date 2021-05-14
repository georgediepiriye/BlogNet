@extends('layout.master')
@section('content')
<div class="container post-container">
  
        <div class="col-sm-10 col-sm-offset-1">

      
          <div>
            <form action="{{ route('posts') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" style="text-transform: capitalize"  placeholder="Enter Post title here!" >
                  </div>
                  @error('title')
                  <div class="error-message">
                     <h5> {{ $message }}</h5>
                  </div>
                  
              @enderror

                <div class="form-group">
                    <textarea name="body" class="form-control post-box" style="text-transform: capitalize"  placeholder="Post something here!" ></textarea>
                  </div>
                  @error('body')
                        <div class="error-message">
                           <h5> {{ $message }}</h5>
                        </div>
                        
                    @enderror
                  <label>Choose Post Category:</label>

                  <select name="category" class="form-control"  >
                    <option>Select</option>
                    <option value="sports">Sports</option>
                    <option value="fashion">Fashion</option>
                    <option value="tech">Tech</option>
                    <option value="politics">Politics</option>
                  </select>
                  @error('category')
                        <div class="error-message">
                           <h5> {{ $message }}</h5>
                        </div>
                        
                    @enderror

                <button type="submit" name="submit" class="btn btn-primary post-button" >Post</button>
              </form>
              
          </div> 
            

              @if ($posts->count())
                 @foreach ($posts as $post )
                 <div class="posts">
                     <div class="post-name">
                        <a href="">{{ $post->user->username }}</a> 
                     </div>
                    
                    <label><h3 class="post-title">{{ $post->title }}</h3></label>
                     <p>{{ $post->body }}</a>
                     <p>{{ $post->category }}</p> <span>{{ $post->created_at->diffForHumans() }}</span>
                     
                         <div class="float-child">
                            <form action="" method="post">
                                @csrf
                                <a href="">Like</a>
                            </form>
                         </div>
                         
                         <div class="float-child">
                            <form action="" method="post">
                                @csrf
                                <a href="">Unlike</a>
                            </form>
                            <span>{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count() ) }}</span>
                         </div>


                   

                 </div>
                
                     
                 @endforeach
                 {{ $posts->links() }}
                  
              @else
                  <h2>There are no Posts</h2>
                  
              @endif
               
              
             
        </div>

    </div>
@endsection