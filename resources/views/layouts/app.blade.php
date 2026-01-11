<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'COOPSERCONT - Servicios Públicos El Contadero')</title>
	<meta name="description" content="@yield('meta_description', 'COOPSERCONT es la Administración Pública Cooperativa del Contadero, prestadora de los servicios de acueducto, alcantarillado y aseo.')">
	<meta name="robots" content="index, follow">
	<meta name="author" content="COOPSERCONT">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="@yield('title', 'COOPSERCONT')">
	<meta property="og:description" content="@yield('meta_description')">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="es_CO">
	<!-- BOOTSTRAP 5.2.3 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32"/>
	<!-- APP CSS -->
	<link href="{{ asset('assets/css/app.css') }}?6" rel="stylesheet">
	<!-- OWL CAROUSEL 2.3.4-->
	<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/css/owl.theme.default.css') }}">
	<!-- Font Awesome icons (free version)-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" defer/>
	@yield("style")
	@stack('styles')
</head>
<body>
	@include('layouts.nav')
	<main class="contenido py-5">
		@yield('content')
	</main>
	<a href="https://wa.me/573000000000" class="btn-wsp" target="_blank" aria-label="Chatear por WhatsApp">
		<i class="fab fa-whatsapp"></i>
	</a>
	@include('layouts.footer')
	<!-- JQUERY 3.7.1 -->
	<script src="{{ asset('vendor/jquery/dist/js/jquery.js') }}"></script>
	<!-- BOOTSTRAP 5.2.3 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- OWL CAROUSEL 2.3.4-->
	<script src="{{ asset('vendor/owl-carousel/dist/js/owl.carousel.js') }}" defer></script>
	@stack('scripts')
	@yield("datatable")
	@yield("script")
</body>
</html>
