@extends('layout.master')
@section('content')
<div class="container post-container">
  
        <div class="col-sm-10 col-sm-offset-1">

         <h2 class="create-posts-title">Create Post</h2>
          <div>
            <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" style="text-transform: capitalize;"  placeholder="Enter Post title here!" >
                </div>
                  @error('title')
                  <div class="error-message">
                     <h5> {{ $message }}</h5>
                  </div>
                  
              @enderror

                <div class="form-group">
                    <textarea name="body" class="form-control post-box"  placeholder="Post something here!" ></textarea>
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
                         <br>
                        <span>Select Image:</span><br>
                        <input type="file" name="image"><br>
                   
                    @error('image')
                        <div class="error-message">
                           <h5> {{ $message }}</h5>
                        </div>
                        
                    @enderror

                <button type="submit" name="submit" class="btn btn-primary post-button">Submit Post</button>
              </form>
              
          </div>
               
              
             
        </div>

    </div>
@endsection