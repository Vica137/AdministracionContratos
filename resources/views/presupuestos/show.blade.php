@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Presupuesto</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $presupuesto->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Monto:</strong> {{ $presupuesto->amount }}</p>
            <p><strong>Creado el:</strong> {{ $presupuesto->created_at }}</p>
            <p><strong>Actualizado el:</strong> {{ $presupuesto->updated_at }}</p>
            <a href="{{ route('presupuestos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection

