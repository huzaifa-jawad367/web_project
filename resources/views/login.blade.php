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

    <nav class="navbar  navbar-expand-lg pt-3  navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-light   "  href="{{url('/')}}">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
              </svg>
            Go to Home</a>
      <span style="font-size: 20px" class="mx-auto  text-light "><p >Login</p></span>
      </nav>
    

    <body class="text-center" style="margin-top: 10%;">
        <div class="align-center" style="margin-bottom: 10%">
          <main class="form-signin mx-auto">
            <form action="get" style="margin-left:25%; width:50%">
                @csrf
              <h1>Please Sign in</h1>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email Address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <p>Don't have an account? <a href="signup">sign up</a>.</p>
          </main>
        </div>


@endsection