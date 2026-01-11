	<nav class="navbar navbar-expand-lg fixed-top navbar-coopsercont">
		<div class="container">
			{{-- LOGOS --}}
			<div class="navbar-brand d-flex align-items-center gap-3">
				<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
					<img src="{{ asset('assets/img/logo-coopsercont.png') }}" alt="COOPSERCONT" class="logo-coopsercont me-2">
					<img src="{{ asset('assets/img/logo-alcaldia.png') }}" alt="Alcaldía El Contadero" class="logo-alcaldia">
				</a>
			</div>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			{{-- MENU --}}
			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

					<li class="nav-item">
						<a class="nav-link text-azul" href="{{ url('/') }}">Inicio</a>
					</li>

					{{-- TRANSPARENCIA --}}
					<li class="nav-item dropdown">
						<a class="nav-link text-azul dropdown-toggle" href="#" id="transparenciaDropdown" role="button" data-bs-toggle="dropdown">
							Transparencia
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/transparencia/tramites') }}">
									Trámites y servicios
								</a>
							</li>
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/transparencia/normatividad') }}">
									Normatividad
								</a>
							</li>
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/compromiso-ambiental') }}">
									Compromiso Ambiental
								</a>
							</li>
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/estructura-organizacional') }}">
									Estructura Organizacional
								</a>
							</li>
						</ul>
					</li>

					{{-- SERVICIOS --}}
					<li class="nav-item dropdown">
						<a class="nav-link text-azul dropdown-toggle" href="#" id="serviciosDropdown" role="button"
							data-bs-toggle="dropdown">
							Servicios Públicos
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/servicios/acueducto') }}">
									Acueducto
								</a>
							</li>
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/servicios/alcantarillado') }}">
									Alcantarillado
								</a>
							</li>
							<li>
								<a class="dropdown-item text-azul" href="{{ url('/servicios/aseo') }}">
									Aseo
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link text-azul" href="{{ url('/tarifas') }}">
							Tarifas
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-azul" href="{{ url('/avisos') }}">
							Avisos y Campañas
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-azul" href="{{ url('/noticias') }}">
							Noticias
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-azul" href="{{ url('/contacto') }}">
							Atención al Ciudadano
						</a>
					</li>
					<li class="nav-item">
						<form action="{{ route('buscar') }}" method="GET" class="d-flex">
							<input type="search" name="q" class="form-control form-control-sm me-2" placeholder="Buscar en el sitio…" value="{{ request('q') }}">
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>