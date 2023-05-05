@extends('layout.structure')

@section('title', "Create New Account")

@section('links')
	<link rel="stylesheet" href="/css/pages.css">
@endsection

@section('title', "Admin Login")

@section('content')
	<section class="mt-space vh-75">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-10 bg-dark">
					<div class="card">
						<form action="{{ route('register') }}" method="POST">
							@csrf
							<div class="card-body">
								@if (session('message'))
									<div class="alert alert-danger alert-dismissible">{{ session('message') }}</div>
								@endif
								<div class="card-title">Admin Login Page</div>
								<div class="card-text text-info">Enter your information here, this information will be added to your profile and will be viewed by people.</div>
								<div class="row pt-3">
									<div class="col-6">
										<input type="text" class="form-control" value="{{ @session('firstname') ? @session('firstname') : "" }}" placeholder="First Name" name="firstname" required>
									</div>

									<div class="col-6">
										<input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
									</div>
								</div>

								<div class="row pt-3">
									<div class="col-8">
										<input type="email" class="form-control" placeholder="Email" name="email" required>
									</div>
								</div>

								<div class="row pt-3">
									<div class="col-8">
										<input type="password" class="form-control" placeholder="Password" name="password" required>
									</div>
								</div>

								<div class="row pt-3">
									<div class="col-8">
										<input type="password" class="form-control" placeholder="Password Comfirm" name="passwordconfirm" required>
									</div>
								</div>

								<div class="row pt-3">
									<div class="col-8">
										<input type="text" class="form-control" placeholder="Occupation" name="occupation" required>
									</div>
								</div>

                                <div class="row pt-3">
									<div class="col-8">
										<input type="text" class="form-control" placeholder="Location" name="location" required>
									</div>
								</div>

                                <div class="row pt-3">
									<div class="col-8">
										<input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
									</div>
								</div>

                                <div class="row pt-3">
									<div class="col-8 d-flex justify-content-center align-items-center">
                                        <span class="text-nowrap">Date of Birth: </span>
										<input type="date" class="form-control" name="date_of_birth" required>
									</div>
								</div>

								<div class="row pt-3">
									{{-- <div class="col-8">
										<label for="profile" class="text-dark">Profile Photo</label>
										<input id="profile" type="file" class="form-control" placeholder="Input Profile" name="profile" required>
									</div> --}}
								</div>


								<div class="row mt-3 justify-content-center">
									<div class="col-md-4">
										<button type="submit" class="btn btn-success btn-lg">Create New Account</button>
									</div>
								</div>
							</div>
						</form>
						<div class="text-center col-md-6">
							Already have a new account ? <a class="btn btn-primary" href="/login">Login Here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')

@endsection
