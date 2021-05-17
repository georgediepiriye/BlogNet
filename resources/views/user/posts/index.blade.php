@extends('layout.master')
@section('content')
<div class="container post-container">
    <div class=" col-sm-12 col-sm-offset-1">
        <span><h2>{{ $user->username }}</h2> 
            Posted {{ $posts->count() }} {{Str::plural('post',  $posts->count() )}}</span> and received {{ $user->receivedlikes->count() }} likes
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