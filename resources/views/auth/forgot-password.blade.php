@extends('guest.layouts.base')

@section('contents')
	<h2 class="text-light text-center mt-5">
		Forgot your Password?
	</h2>

	{{-- Login --}}
	<div class="mt-4 text-light">
		No problem. Just let us know your email address and we will email you a password reset link that will allow you to
		choose a new one.
	</div>

	<!-- Session Status -->
	<x-auth-session-status class="mb-4" :status="session('status')" />



	<form method="POST" action="{{ route('password.email') }}">
		@csrf

		<!-- Email Address -->
		<div>
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control d-block mt-1" id="email" name="email" :value="old('email')" required
				autofocus>
			{{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
		</div>

		<div class="d-flex align-items-center justify-items-end mt-4">
			<button type="submit" class="btn btn-warning mt-5">Email Password Reset Link</button>
		</div>
	</form>
@endsection
