@extends('layout.master')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4 jt np">“There is no greater agony than bearing an untold story inside you.”</h1>
        <p>~ Maya Angelou</p>
        @if (!Session::has('user'))
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Get Started</a>
        </p>
            
        @endif
       

    </div>
    <hr>

    
    <div class="row">
        <h5 class="details-title">POPULAR POSTS</h5>
        <div class="col-sm-4 float-child">
            <div class="card">
                <div class="card-body text-center">
                    <h4>This is the post title</h4>
                    <h5>By diepiriye, 5 mins ago</h5>
                    <h5>Tech</h5>

                </div>
                

            </div>
            


        </div>
        <div class="col-sm-4 float-child">
            <div class="card">
                <div class="card-body text-center">
                    <h4>This is the post title</h4>
                    <h5>By diepiriye, 5 mins ago</h5>
                    <h5>Tech</h5>

                </div>

            </div>

        </div>
        <div class="col-sm-4 float-child">
            <div class="card">
                <div class="card-body text-center">
                    <h4>This is the post title</h4>
                    <h5>By diepiriye, 5 mins ago</h5>
                    <h5>Tech</h5>

                </div>
            </div>

        </div>
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