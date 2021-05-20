<nav class="navbar bg-primary navbar-inverse sticky ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a href="{{ route('posts') }}"><img class="logo" src="/images/blognet_logo.jpg" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="np"><a href="{{ route('posts') }}">Posts</a></li>
        
          <li class="dropdown np">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('posts.sports') }}">Sports</a></li>
              <li><a href="{{ route('posts.fashion') }}">Fashion</a></li>
              <li><a href="{{ route('posts.tech') }}">Tech</a></li>
              <li><a href="{{ route('posts.politics') }}">Politics</a></li>

            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Session::has('user'))
                  <li class="np"><a href="#"><span class="glyphicon "></span>{{ Str::ucfirst(Session::get('user')['username'])  }}</a></li>
                  <li class="np"><a href="{{ route('createpost') }}"><span class="glyphicon ">Create-Post</a></li>
                  <li class="np">
                     <form action="{{ route('logout') }}" method="POST" class="inline">
                         @csrf
                  
                        <button class="glyphicon btn logout-button" type="submit" name="submit">Logout</button>
                 
                      </form>
                  </li>
            @else
            <li class="np"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li class="np"><a href="{{ route('register') }}"><span class="glyphicon glyphicon-register"></span> Register</a></li>
            @endif
            
          
        </ul>
      </div>
    </div>
  </nav>