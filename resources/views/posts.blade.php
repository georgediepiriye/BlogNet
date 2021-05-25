@extends('layout.master')
@section('content')
<div class="container">
    <div class="jumbotron">
        @if (session()->has('message'))
        <div style="color: green" class="jt np">
          {{ session('message') }}
        </div>
            
        @endif
        <h1 class="display-4 jt np">“There is no greater agony than bearing an untold story inside you.”</h1>
     
        <p>~ Maya Angelou</p>
      @guest
          
     
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Get Started</a>
        </p>
        @endguest      
       
       

    </div>
    <hr>

    
    <div class="row">
        <h5 class="details-title">POPULAR POSTS</h5>
        @foreach ($populars as $popular)
              <div class="col float-child" style="width: 33%">
                <div class="card">
                    <div class="card-body text-center">
                        <h5><b>{{Str::ucfirst($popular->title)}}</b></h5>
                        <h5>By <a href="{{ route('user.posts',$popular->user->username) }}">{{Str::ucfirst($popular->user->username ) }}</a>, {{ $popular->created_at->diffForHumans() }}</h5>
                        <div class="pc" >
                            <h5 class="@if ($popular->category==='tech')
                                {{$class='tech-background'}}
                             @elseif ($popular->category==='politics') 
                               {{$class='politics-background'}}  
                             @elseif ($popular->category==='sports') 
                                {{ $class='sports-background'}} 
                                @elseif ($popular->category==='fashion') 
                               {{$class='fashion-background'}}       
                                 
                             @endif">{{ $popular->category }}</h5>

                        </div>
                        

                    </div>
                </div>
        </div>
        @endforeach
       
    </div>
    <hr>
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