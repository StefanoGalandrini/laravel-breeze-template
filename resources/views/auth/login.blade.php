@extends('guest.layouts.base')

@section('contents')
	<h2 class="text-light text-center mt-5">
		Login Form
	</h2>
	<form method="POST" action="{{ route('login') }}">
		@csrf
		<div class="card w-50 mx-auto mt-5 mb-5">

			<div class="card-body">

				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" class="form-control" id="email" name="email" required autofocus autocomplete="username">
				</div>

				<div class="mb-3">
					<label for="passoword" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
				</div>

				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="check" name="remember">
					<label class="form-check-label" for="check">Remember me</label>
				</div>

				<div class="d-flex justify-content-between mt-4 align-items-center mt-5">
					@if (Route::has('password.request'))
						<a class="link-success link-underline-opacity-0 link-underline-opacity-75-hover"
							href="{{ route('password.request') }}">
							Forgot your password?
						</a>
					@endif
					<button type="submit" class="btn btn-success ms-5">Submit</button>
				</div>
			</div>
		</div>
	</form>
@endsection
