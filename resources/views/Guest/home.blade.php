<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Styles -->
	<style>
		.welcome {
			display: flex;
			flex-direction: column;
			width: 100%;
			height: 100vh;
			justify-content: start;
			align-items: center;
			background-color: rgb(30, 30, 30);
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

	<div class="d-flex justify-center py-4">
		@if (Route::has('login'))
			<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
				@auth
					<a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
				@else
					<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
					@endif
				@endauth
			</div>
		@endif

		<div class="w-100 mx-auto">
			<div class="welcome">
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
	</div>
	</div>
</body>

</html>
