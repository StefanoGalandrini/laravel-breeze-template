@extends('guest.layouts.base')

@section('contents')
	<h2 class="text-light text-center mt-2">
		Register Form
	</h2>

	{{-- Register --}}
	<form method="POST" action="{{ route('register') }}">
		@csrf
		<div class="card w-50 mx-auto mt-5 mb-5">
			<div class="card-body">

				{{-- Name --}}
				<div class="mb-3">
					<label for="name" class="form-label">Name</label>
					<input type="text" id="name" class="form-control" name="name" :value="old('name')" required autofocus
						autocomplete="name">
					{{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
				</div>

				{{-- Email Address --}}
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus
						autocomplete="username">
					{{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
				</div>

				{{-- Password --}}
				<div class="mb-4">
					<label for="passoword" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
					{{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
				</div>

				{{-- Confirm Password --}}
				<div class="mb-4">
					<label for="password_conf" class="form-label">Confirm Password</label>
					<input type="password" class="form-control" id="password_conf" name="password_confirmation" required
						autocomplete="new-password">
					{{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
				</div>

				<div class="d-flex justify-content-between mt-4 align-items-center mt-5">

					<a class="link-success link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('login') }}">
						Already registered?
					</a>

					<button type="submit" class="btn btn-success ms-5">Register</button>
				</div>
			</div>
		</div>
	</form>
@endsection
