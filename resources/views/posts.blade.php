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
               <x-post-component :post="$post"/>
            @endforeach
            {{ $posts->links() }}

            
        @else
             <h2>There are no Posts</h2>
            
        @endif

    </div>
</div>
@endsection