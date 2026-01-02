<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'COOPSERCONT')</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container">
		<a class="navbar-brand" href="/">
			<img src="{{ asset('assets/img/logo.png') }}" height="40" alt="COOPSERCONT">
		</a>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item"><a class="nav-link" href="/servicios">Servicios</a></li>
			<li class="nav-item"><a class="nav-link" href="/tarifas">Tarifas</a></li>
			<li class="nav-item"><a class="nav-link" href="/avisos">Avisos</a></li>
			<li class="nav-item"><a class="nav-link" href="/reporte">Reporte</a></li>
		</ul>
	</div>
</nav>

<main class="py-5">
	@yield('content')
</main>

<footer class="bg-dark text-white py-4">
	<div class="container text-center">
		<small>
			Calle 4 No. 4-12 Barrio El Centro · NIT 900027859-1<br>
			L–V 8:00–12:00 / 2:00–6:00
		</small>
	</div>
</footer>
</body>
</html>
