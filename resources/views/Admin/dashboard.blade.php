@php $user = Auth::user(); @endphp

@extends('admin.layouts.base')


@section('contents')
	<div class="container d-flex-column align-items-center justify-content-center text-center mt-5 mb-5 p-5 rounded border">
		<h2 class="p-5">ADMIN DASHBOARD</h2>

		<h4 fs-3>
			Welcome, {{ $user->name }}!
		</h4>

		<h4>
			You are logged in!
		</h4>
	</div>
@endsection
