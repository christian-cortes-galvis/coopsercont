@extends('layouts.app')
@section('title', 'Avisos y Campañas')
@section('meta_description', 'Consulta los avisos y campañas informativas oficiales de COOPSERCONT dirigidos a la comunidad de El Contadero.')
@section('content')
    <div class="container avisos-pdf">

        <h2 class="text-center fw-bold mb-1">
            AVISOS Y CAMPAÑAS INFORMATIVAS
        </h2>

        <p class="text-center text-muted mb-4">
            Información oficial dirigida a la comunidad
        </p>

        @forelse ($avisos as $tipo => $items)

            {{-- ENCABEZADO POR TIPO --}}
            <div class="aviso-tipo">
                {{ $tipo === 'aviso' ? 'AVISOS' : 'CAMPAÑAS' }}
            </div>

            <ul class="list-group list-group-flush mb-4">
                @foreach ($items as $aviso)
                    <li class="list-group-item aviso-item">
                        <strong>{{ $aviso->titulo }}</strong>
                        <p class="mb-0">
                            {{ $aviso->descripcion }}
                        </p>
                    </li>
                @endforeach
            </ul>

        @empty
            <div class="alert alert-warning text-center">
                No hay avisos publicados actualmente.
            </div>
        @endforelse

    </div>
@endsection
