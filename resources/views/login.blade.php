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
        <main class="form-signin">
            <form action="get">
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
            <p>Don't have an account? <a href="signup.blade.php">sign up</a>.</p>
        </main>

        </div>
    </body>
</html>
@endsection