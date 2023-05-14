@extends('layouts.main');

@push('title')
<title>Sign up</title>  
@endpush

@section('main')

</head>

<nav class="navbar  navbar-expand-lg pt-3  navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light   "  href="{{url('/')}}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
        Go to Home</a>
  <span style="font-size: 20px" class="mx-auto  text-light "><p >Signup</p></span>
  </nav>

<body style="margin: 5%">
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Signup Form</h4>
					</div>
					<div class="card-body">
						<form action="{{ route('register-user') }}" method="post">

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
								<label for="name">Full Name:</label>
								<input type="text" name="name" id="name" class="form-control" value="" required>
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
							</div>
							<div class="form-group">
								<label for="gender">Gender:</label>
								<select id="gender" name="gender">
								<option value="m">Male</option>
								<option value="f">Female</option>
								<option selected value="n">Prefer not to say</option>
								</select>
							</div>
							<div class="form-group">
								<label for="cnic">CNIC Number:</label>
								<input type="text" name="cnic" id="cnic" class="form-control" value="" required>
                                <span class="text-danger">@error('cnic') {{$message}} @enderror</span>
							</div>
                            <div class="form-group">
								<label for="dob">Date of Birth:</label>
								<input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="" required>
                                <span class="text-danger">@error('date_of_birth') {{$message}} @enderror</span>
							</div>
                            <div class="form-group">
								<label for="phone">Phone Number:</label>
								<input type="tel" name="phone" id="phone" class="form-control" value="" required>
                                <span class="text-danger">@error('phone') {{$message}} @enderror</span>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" class="form-control" value="" required>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" name="password" id="password" class="form-control" value="" required>
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
							</div>
							<div class="form-group">
								<label for="password_confirmation">Retype Password:</label>
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="" required>
                                <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-dark btn-block">Signup</button>
							</div>
                            <p>Already have an account?<a href="login"> Login here</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6

@endsection