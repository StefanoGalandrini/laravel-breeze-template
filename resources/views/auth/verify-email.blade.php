@extends('guest.layouts.base')

@section('contents')
	<h2 class="text-light text-center mt-5">
		Verify Email Address
	</h2>

	<div class="text-light text-center my-4">
		Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just
		emailed to you? If you didn't receive the email, we will gladly send you another.
	</div>

	@if (session('status') == 'verification-link-sent')
		<div class="text-success text-center my-4">
			A new verification link has been sent to the email address you provided during registration.
		</div>
	@endif

	{{-- Verify Email --}}
	<div class="mt-4 d-flex align-items-center justify-content-between">
		<form method="POST" action="{{ route('verification.send') }}">
			@csrf

			<button type="submit" class="btn btn-success mt-5">Resend Verification Email</button>

		</form>

		<form method="POST" action="{{ route('logout') }}">
			@csrf

			<button type="submit" class="btn btn-ssecondary ms-5">Log Out</button>

		</form>
	</div>
@endsection
