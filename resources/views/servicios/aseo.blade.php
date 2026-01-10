@extends('layouts.app')
@section('title', 'Servicio de Aseo')
@section('content')
	<div class="container seccion-detalle mt-4">
		<h2 class="fw-bold mb-3 text-center text-azul">
            SERVICIO DE ASEO
        </h2>
        <p class="text-center text-muted mb-4">
            Prestación del servicio público de aseo en el municipio de El Contadero
        </p>
        {{-- DESCRIPCIÓN --}}
        <section class="mb-4">
            <h5 class="titulo-seccion">Recolección de residuos sólidos</h5>
            <p>
                La recolección de residuos sólidos se realiza de manera organizada,
                conforme a las rutas, días y horarios establecidos por COOPSERCONT,
                garantizando un entorno limpio y saludable para la comunidad.
            </p>
        </section>
        {{-- COBERTURA --}}
        <section class="mb-4">
            <h5 class="titulo-seccion">Cobertura del servicio</h5>
            <p>
                COOPSERCONT presta el servicio público de aseo en la zona urbana y rural
                del municipio de El Contadero, incluyendo el barrido de calles y la
                limpieza de zonas comunes.
            </p>
        </section>
        {{-- FRECUENCIAS Y HORARIOS --}}
        <section class="mb-4">
            <h5 class="titulo-seccion">Frecuencias y horarios de recolección</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-sm align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>Tipo de recolección</th>
                            <th>Día</th>
                            <th>Zona</th>
                            <th>Tipo de residuos</th>
                            <th>Recomendaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Residuos reciclables</td>
                            <td>Miércoles</td>
                            <td>Zona urbana</td>
                            <td>Papel, cartón, plástico, vidrio y metales</td>
                            <td>Entregar limpios y secos</td>
                        </tr>
                        <tr>
                            <td>Residuos ordinarios</td>
                            <td>Jueves</td>
                            <td>Sector rural</td>
                            <td>Residuos domésticos no aprovechables</td>
                            <td>Bolsas resistentes y bien cerradas</td>
                        </tr>
                        <tr>
                            <td>Residuos ordinarios</td>
                            <td>Viernes</td>
                            <td>Sector urbano</td>
                            <td>Residuos domésticos ordinarios</td>
                            <td>Sacar en los horarios establecidos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        {{-- BARRIDO --}}
        <section class="mb-4">
            <h5 class="titulo-seccion">Barrido de calles y limpieza de zonas comunes</h5>
            <p>
                COOPSERCONT ejecuta actividades permanentes de barrido manual y limpieza
                de espacios públicos, que incluyen:
            </p>
            <ul>
                <li>Calles principales y secundarias</li>
                <li>Parques y zonas verdes</li>
                <li>Plazas y espacios públicos</li>
                <li>Áreas comunes de uso comunitario</li>
            </ul>
        </section>
        {{-- RESPONSABILIDAD DE USUARIOS --}}
        <section class="mb-4">
            <h5 class="titulo-seccion">Responsabilidad de los usuarios</h5>
            <ul>
                <li>Respetar los días y horarios de recolección</li>
                <li>Separar correctamente los residuos reciclables</li>
                <li>No arrojar basura en vías públicas, quebradas o zonas verdes</li>
                <li>Utilizar recipientes adecuados para la disposición de residuos</li>
                <li>Colaborar con las campañas de limpieza y educación ambiental</li>
            </ul>
        </section>
        {{-- COMPROMISO AMBIENTAL --}}
        <section class="mb-4">
            <h5 class="titulo-seccion">Compromiso ambiental</h5>
            <p>
                COOPSERCONT reafirma su compromiso con la gestión integral de residuos
                sólidos, la promoción del reciclaje, la reducción del impacto ambiental
                y el fortalecimiento de la cultura ciudadana.
            </p>
        </section>
        {{-- REPORTE --}}
        <section class="mb-5">
            <h5 class="titulo-seccion">Reporte de novedades</h5>
            <p>
                Si presenta inconvenientes relacionados con el servicio de aseo,
                puede realizar el reporte a través del siguiente formulario:
            </p>
            <a href="{{ url('/reporte') }}" class="btn btn-primary">
                Reportar novedad del servicio de aseo
            </a>
        </section>
    </div>
@endsection
