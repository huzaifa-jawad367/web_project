@extends('layouts.main');

@push('title')
<title>Report Lost child</title>  
@endpush

@section('main')

<!-- Bootstrap CSS -->
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Signup Form</h4>
					</div>
					<div class="card-body">
						<form method="POST" action="">
							<div class="form-group">
								<label for="first_name">First Name:</label>
								<input type="text" name="first_name" id="first_name" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="last_name">Last Name:</label>
								<input type="text" name="last_name" id="last_name" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="cnic">CNIC Number:</label>
								<input type="text" name="cnic" id="cnic" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" name="password" id="password" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password_confirmation">Retype Password:</label>
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Signup</button>
							</div>
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