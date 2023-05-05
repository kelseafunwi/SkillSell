@extends('layout.structure')

@section('title', "Login")

@section('shouldLoginLinkDisplay', 'd-none')

@section('links')
	<link rel="stylesheet" href="/css/pages.css">
@endsection

@section('title', "Admin Login")

@section('content')
	<section class="mt-space vh-75">
		<div class="container" data-aos="fade-up">
			<div class="row justify-content-md-center">
				<div class="col-md-10 bg-dark">
					<div class="card">
						<span>Don't have an account ? <a href="/register" class="text-primary">Create one</a>	</span>
						<form method="POST" action="/login">
							@csrf
							<div class="card-body">
								<div class="card-title" data-aos="slide-left">Admin Login Page</div>
								@if(session('status'))
									<div class="alert alert-danger">{{ session('status') }}</div>
								@endif
								<div class="row pt-3 justify-content-center" data-aos="slide-left" data-aos-delay="300">
									<div class="col-10">
										<input type="email" class="form-control form-control-lg" placeholder="Email" name="email" required>
									</div>
								</div>

								<div class="row pt-3 justify-content-center" data-aos="slide-left" data-aos-delay="200">
									<div class="col-10">
										<input type="password" data-aos="zoom-out" class="form-control form-control-lg" placeholder="Password" name="password" required>
									</div>
								</div>
								<div class="row mt-3 justify-content-center">
									<div class="col-md-4">
										<button class="btn btn-primary btn-large">Login to Account</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')

@endsection
