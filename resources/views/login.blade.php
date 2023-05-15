@extends('layouts.main')

@section('main')
<!doctype html>
<html lang="en">
    <head>
        @push('title')
        <title>Login</title>
        @endpush
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body class="text-center">

      <nav class="navbar navbar-expand-lg   navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-light  "  href="{{url('/')}}">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
              </svg>
            Go to Home</a>
     
     </nav>

      <div class="container mt-5 pt-3">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card" style="margin-top:1rem; margin-bottom:1rem">
              <div class="card-header">
                <h4 class="text-center">Please Sign in</h4>
              </div>
              <div class="card-body">
                <main class="form-signin">
                  <form action="{{route('signin-user')}}" method="POST">
                    
                    {{-- Message in case of success --}}
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    {{-- Message incase of failiure --}}
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    @csrf

                    <div class="form-group">
                      <label for="email">Email Address:</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                      <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" value="">  
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <button class="w-100 btn btn-lg btn-dark" type="submit" style="margin-top:0.5rem">Sign in</button>
                    </div>
                      
                  </form>
                  
                  <p>Don't have an account? <a href="signup">sign up</a>.</p>
                  
                  
                </main>
              </div>
              
            </div>
          </div>
          
        </div>
        
      </div>

    </body>
</html>
@endsection