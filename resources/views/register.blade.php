@extends('layout.master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
                <h5>Registration Form</h5>

            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"  placeholder="Enter Username" value="{{ old('username') }}">
                    @error('username')
                        <div class="error-message">
                           <h5> {{ $message }}</h5>
                        </div>
                        
                    @enderror
                  </div>
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control"  placeholder="Enter email" value="{{ old('email') }}">
                  @error('email')
                  <div class="error-message">
                     <h5> {{ $message }}</h5>
                  </div>
                  
              @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control"  placeholder="Password">
                  @error('password')
                  <div class="error-message">
                     <h5> {{ $message }}</h5>
                  </div>
                  
              @enderror
                </div>
                <div class="form-group">
                    <label> Retype Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Retype Password">
                    @error('password_confirmation')
                    <div class="error-message">
                       <h5> {{ $message }}</h5>
                    </div>
                    
                @enderror
                  </div>
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
              </form>
             
        </div>

    </div>

</div>
@endsection