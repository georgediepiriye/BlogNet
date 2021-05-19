<nav class="navbar navbar-inverse sticky">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">BlogNet</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ route('posts') }}">Posts</a></li>
          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Tech</a></li>
              <li><a href="#">Politics</a></li>

            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Session::has('user'))
                  <li><a href="#"><span class="glyphicon "></span>{{ Session::get('user')['username'] }}</a></li>
                  <li><a href="{{ route('createpost') }}"><span class="glyphicon ">Create-Post</a></li>
                  <li>
                     <form action="{{ route('logout') }}" method="POST" class="inline">
                         @csrf
                  
                        <button class="glyphicon btn logout-button" type="submit" name="submit">Logout</button>
                 
                      </form>
                  </li>
            @else
            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-register"></span> Register</a></li>
            @endif
            
          
        </ul>
      </div>
    </div>
  </nav>