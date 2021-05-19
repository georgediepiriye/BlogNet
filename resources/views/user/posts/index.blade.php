@extends('layout.master')
@section('content')
<div class="container post-container">
    <div class=" col-sm-12 user-posts-box">
        <span><h2>{{ $user->username }}</h2> 
            Posted {{ $posts->count() }} {{Str::plural('post',  $posts->count() )}}</span> and received {{ $user->receivedlikes->count() }} {{Str::plural('like', $user->receivedlikes->count() )}}
        @if ($posts->count())
            @foreach ($posts as $post)
               <x-post-component :post="$post"/>
            @endforeach
            {{ $posts->links() }}
    
            
        @else
             <h2>{{ $user->username }} does not have any Post</h2>
            
        @endif
    
    </div>


</div>

@endsection