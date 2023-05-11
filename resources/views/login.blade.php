@extends('layouts.main')
@push('title')
<title>Login</title>
@endpush
@section('main')

       
<nav class="navbar navbar-expand-lg   navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light  "  href="{{url('/')}}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
        Go to Home</a>
 
 </nav>
       
  
    <div class="text-center pt-5">
        <main class="form-signin container-fluid col-md-10 mt-5">
            <form action="get">
                <h1>Please Sign in</h1>
                <div class="form-floating  mt-4">
                    <label for="floatingInput ">Email Address</label>
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                   
                </div>
                <div class="form-floating mt-4">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" id="floatingPassword">
                    
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3 col-md-4" type="submit">Sign in</button>
            </form>
            <div class="container-fluid mt-4"></div>
            <p>Don't have an account? <a href="{{url('/')}}/signup">sign up</a>.</p>
        </main>

        </div>
    </div>

@endsection