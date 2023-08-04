<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Scripts -->
	@vite(['resources/scss/app.scss', 'resources/js/app.js'])

	<!-- Fonts -->
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Styles -->
	<style>
		body {
			background-color: rgb(30, 30, 30) !important;
		}

		img {
			max-width: 150px;
			margin: 6rem 0;
		}

		h1 {
			color: rgb(200, 0, 0) !important;
			font-size: 4.5rem !important;
		}
	</style>
</head>

<body>

	<div class="w-75 d-flex justify-content-end py-4">
		@if (Route::has('login'))
			<div class="d-none d-sm-block px-6 py-4">
				@auth
					<a href="{{ route('admin.dashboard') }}" class="text-white text-decoration-none m-2">Dashboard</a>
				@else
					<a href="{{ route('login') }}" class="text-white text-decoration-none m-2">Log in</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}" class="ms-4 text-white text-decoration-none">Register</a>
					@endif
				@endauth
			</div>
		@endif
	</div>

	<div class="w-100 mx-auto">
		<div class="d-flex flex-column justify-content-start align-items-center vh-100">
			<div class="logo">
				<img src="{{ Vite::asset('resources/img/home/laravel.png') }}" alt="Logo Laravel">
				<img src="{{ Vite::asset('resources/img/home/vite-logo.png') }}" alt="Logo Vite">
			</div>
			<h1>Laravel-Breeze Template</h1>
		</div>
		<div class="text-center">
			Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
		</div>
	</div>
</body>

</html>
