@extends('guest.layouts.base')

@section('contents')
	<h2 class="text-light text-center mt-5">
		Confirm Password
	</h2>

	<div class="mb-4 text-light">
		This is a secure area of the application. Please confirm your password before continuing.
	</div>

	{{-- Confirm Password --}}
	<form method="POST" action="{{ route('password.confirm') }}">
		@csrf

		<div class="card w-50 mx-auto mt-5 mb-5">
			<div class="card-body">

				{{-- Password --}}
				<div class="mb-4">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
					{{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
				</div>

				<div class="d-flex justify-content-end mt-4">
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
			</div>
		</div>
	</form>
@endsection
