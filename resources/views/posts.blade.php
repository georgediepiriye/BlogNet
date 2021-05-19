@extends('layout.master')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">“There is no greater agony than bearing an untold story inside you.”</h1>
        <p>~ Maya Angelou</p>
        @if (!Session::has('user'))
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Get Started</a>
        </p>
            
        @endif
       

    </div>
    <div class="post-container">
   
   
    
        <div class="col">
        
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

</div>


@endsection