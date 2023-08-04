<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Guest Base Layout</title>
	@vite('resources/js/app.js')
</head>

<body class="bg-dark text-light">
	@include('guest.includes.header')

	<div class="container w-100 d-flex justify-content-center align-items-center">
		<main class="w-100">
			@yield('contents')
		</main>
	</div>

	@include('guest.includes.footer')
</body>

</html>
