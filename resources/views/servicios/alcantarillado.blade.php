@extends('layouts.app')

@section('title','Servicio de Alcantarillado')

@section('content')
<div class="container servicio-detalle">

    <h2 class="fw-bold mb-3 text-center">
        SERVICIO DE ALCANTARILLADO
    </h2>

    <p class="text-center text-muted mb-4">
        Operación y mantenimiento del sistema de alcantarillado del municipio de El Contadero
    </p>

    {{-- DESCRIPCIÓN --}}
    <section class="mb-4">
        <h5 class="titulo-seccion">Descripción del sistema</h5>
        <p>
            COOPSERCONT opera y mantiene el sistema de alcantarillado, asegurando la
            correcta recolección, transporte y disposición de las aguas residuales.
            De esta manera se contribuye a la protección de la salud pública, la
            prevención de riesgos ambientales y el mejoramiento de las condiciones
            sanitarias de la comunidad.
        </p>
    </section>

    {{-- COBERTURA --}}
    <section class="mb-4">
        <h5 class="titulo-seccion">Cobertura del servicio</h5>
        <p>
            El servicio público de alcantarillado se presta en la zona urbana del
            municipio de El Contadero, cubriendo las áreas atendidas por la red de
            alcantarillado existente.
        </p>
    </section>

    {{-- ATENCIÓN DE EMERGENCIAS --}}
    <section class="mb-4">
        <h5 class="titulo-seccion">Atención de emergencias</h5>
        <p>
            COOPSERCONT cuenta con un protocolo de atención para situaciones que afecten
            el sistema de alcantarillado, tales como:
        </p>
        <ul>
            <li>Obstrucciones en la red de alcantarillado</li>
            <li>Reboses o taponamientos de alcantarillas</li>
            <li>Daños en tuberías o pozos de inspección</li>
            <li>Afectaciones por lluvias intensas o deslizamientos</li>
        </ul>
    </section>

    {{-- MANTENIMIENTO --}}
    <section class="mb-4">
        <h5 class="titulo-seccion">Mantenimiento del sistema</h5>
        <p>
            De manera permanente se realizan actividades de mantenimiento preventivo
            y correctivo, entre ellas:
        </p>
        <ul>
            <li>Limpieza y desobstrucción de redes</li>
            <li>Inspección de pozos de alcantarillado</li>
            <li>Reparación de daños en tuberías</li>
            <li>Mantenimiento preventivo para evitar fallas futuras</li>
        </ul>
    </section>

    {{-- MANEJO DE AGUAS RESIDUALES --}}
    <section class="mb-4">
        <h5 class="titulo-seccion">Manejo de aguas residuales</h5>
        <ul>
            <li>Recolección y conducción adecuada de las aguas residuales domésticas</li>
            <li>Operación y mantenimiento de la infraestructura existente</li>
            <li>Control de vertimientos conforme a la normatividad ambiental vigente</li>
            <li>Prevención de descargas contaminantes a fuentes hídricas</li>
        </ul>
    </section>

    {{-- REPORTE --}}
    <section class="mb-5">
        <h5 class="titulo-seccion">Reporte de novedades</h5>
        <p>
            Si presenta inconvenientes relacionados con el sistema de alcantarillado,
            puede realizar el reporte a través del siguiente formulario:
        </p>

        <a href="{{ url('/reporte') }}" class="btn btn-primary">
            Reportar novedad del servicio de alcantarillado
        </a>
    </section>

</div>
@endsection
