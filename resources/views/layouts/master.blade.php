<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	@vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-sky-100 flex flex-col min-h-screen">
	
	<main class="flex-1 min-h-full">
		@yield('content')
	</main>

	<footer class="text-center my-4">
		Copyright &copy; {{ date('Y') }}
	</footer>
</body>
</html>