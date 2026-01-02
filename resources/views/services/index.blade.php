@extends('layouts.app')

@section('title','Servicios')

@section('content')
<div class="container">

    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Nuestros Servicios</h1>
        <p class="lead">
            COOPSERCONT presta servicios públicos esenciales con calidad,
            responsabilidad y compromiso con la comunidad.
        </p>
    </div>

    <div class="row g-4">

        @forelse ($services as $service)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">

                        @if($service->icono)
                            <div class="mb-3">
                                <i class="{{ $service->icono }} fs-1 text-primary"></i>
                            </div>
                        @endif

                        <h5 class="card-title fw-bold">
                            {{ $service->nombre }}
                        </h5>

                        <p class="card-text text-muted">
                            {{ $service->descripcion }}
                        </p>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-warning">
                    No hay servicios registrados actualmente.
                </div>
            </div>
        @endforelse

    </div>

</div>
@endsection
