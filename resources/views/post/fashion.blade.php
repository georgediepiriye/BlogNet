@extends('layout.master')
@section('content')
<div class="container post-container">
    <div class=" col-sm-12 user-posts-box">
        <h2>Fashion</h2>
    
        @if ($posts->count())
            @foreach ($posts as $post)
               <x-post-component :post="$post"/>
            @endforeach
            {{ $posts->links() }}
    
            
        @else
             <h2>No Posts on Fashion</h2>
            
        @endif
    
    </div>


</div>

@endsection