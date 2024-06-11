@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Contratos</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="grid-container d-flex">
            <div class="text-center mr-3">
                <a href="{{ route('contratos.create') }}"><img src="{{ asset('media/ag.png') }}" alt="" width="40px"></a><span>Crear</span>
            </div>
            <div class="text-center mr-3">
                <a href="#"><img src="{{ asset('media/ed.png') }}" alt="" width="40px"></a><span>Editar</span>
            </div>
            <div class="text-center">
                <a href="#"><img src="{{ asset('media/el.png') }}" alt="" width="40px"></a><span>Eliminar</span>
            </div>
        </div>
    </div>

    @if($contratos->count() > 0)
        @foreach($contratos as $contrato)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Contrato {{ $contrato->id }}</h5>
                    <p class="card-text">Año: {{ $contrato->anio }} | Estatus: {{ $contrato->estatus }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>No hay contratos disponibles.</p>
    @endif
</div>
@endsection

