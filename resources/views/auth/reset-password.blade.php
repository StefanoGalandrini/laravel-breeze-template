@extends('guest.layouts.base')

@section('contents')
	<h2 class="text-light text-center mt-2">
		Reset Password
	</h2>

	{{-- Reset --}}
	<form method="POST" action="{{ route('password.store') }}">
		@csrf
		<div class="card w-50 mx-auto mt-5 mb-5">
			<div class="card-body">

				{{-- Password Reset Token --}}
				<input type="hidden" name="token" value="{{ $request->route('token') }}">

				{{-- Email Address --}}
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" id="email" class="form-control" name="email" :value="old('email', $request - > email)"
						required autofocus autocomplete="username">
					{{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
				</div>

				{{-- Password --}}
				<div class="mb-4">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
					{{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
				</div>

				{{-- Confirm Password --}}
				<div class="mb-4">
					<label for="password_conf" class="form-label">Confirm Password</label>
					<input type="password" class="form-control" id="password_conf" name="password_confirmation" required
						autocomplete="new-password">
					{{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
				</div>

				<div class="d-flex justify-content-between mt-4 align-items-center mt-5">

					<button type="submit" class="btn btn-primary ms-5">Reset Password</button>
				</div>
			</div>
		</div>
	</form>
@endsection
