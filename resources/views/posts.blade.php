@extends('layout.master')
@section('content')
<div class="container post-container">
  
        <div class="col-sm-10 col-sm-offset-1">
      

            <form action="{{ route('posts') }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="body" class="form-control post-box"   placeholder="Post something here!" ></textarea>
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

              @if ($posts->count())
                 @foreach ($posts as $post )
                 <div class="posts">
                     <a href="" class="post-name">{{ $post->user->username }}</a> <span>{{ $post->created_at->diffForHumans() }}</span>
                     <p>{{ $post->body }}</a>
                     <p>{{ $post->category }}</p>

                 </div>
                
                     
                 @endforeach
                  
              @else
                  <h2>There are no Posts</h2>
                  
              @endif
              
              
             
        </div>

    </div>
@endsection