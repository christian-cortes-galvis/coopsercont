<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'COOPSERCONT')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-coopsercont">
        <div class="container">
            {{-- LOGOS --}}
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo-coopsercont.jpeg') }}" alt="COOPSERCONT" class="logo-main me-2">
                <img src="{{ asset('assets/img/logo-alcaldia.jpeg') }}" alt="Alcaldía El Contadero" class="logo-secondary">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- MENU --}}
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>

                    {{-- TRANSPARENCIA --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="transparenciaDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Transparencia
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a class="dropdown-item" href="{{ url('/transparencia/instrumentos') }}">
                                    Instrumentos de gestión
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/transparencia/tramites') }}">
                                    Trámites y servicios
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="dropdown-header">
                                Contratación
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/transparencia/contratacion/plan-anual') }}">
                                    Plan anual de adquisiciones
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/transparencia/contratacion/ejecucion') }}">
                                    Ejecución de contratos
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/transparencia/presupuesto') }}">
                                    Presupuesto y estados financieros
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/transparencia/normatividad') }}">
                                    Normatividad
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- SERVICIOS --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Servicios Públicos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ url('/servicios/acueducto') }}">
                                    Acueducto
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/servicios/alcantarillado') }}">
                                    Alcantarillado
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/servicios/aseo') }}">
                                    Aseo
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/tarifas') }}">
                            Tarifas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/avisos') }}">
                            Avisos y Campañas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/noticias') }}">
                            Noticias
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contacto') }}">
                            Atención al Ciudadano
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <small>
                Calle 4 No. 4-12 Barrio El Centro · NIT 900027859-1<br>
                L-V 8:00-12:00 / 2:00-6:00
            </small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
