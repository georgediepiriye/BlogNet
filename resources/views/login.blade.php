@extends('layout.master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
           
                <h3>Login</h3>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control"  placeholder="Enter Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="error-message">
                           <h5> {{ $message }}</h5>
                        </div>
                        
                    @enderror
                  </div>
            
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password"  class="form-control"  placeholder="Password">
                  @error('password')
                  <div class="error-message">
                     <h5> {{ $message }}</h5>
                  </div>
                  
              @enderror
                </div>
                <input type="checkbox" name="remember">
                <label> Remember me</label>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
              </form>
              
              @if (session()->has('error'))
              <div class="error-message">
                {{ session('error') }}
              </div>
                  
              @endif
             
        </div>

    </div>

</div>
@endsection