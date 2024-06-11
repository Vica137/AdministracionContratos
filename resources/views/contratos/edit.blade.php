@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Editar Contrato</h2>
    <form method="POST" action="{{ route('contratos.update', $contrato->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="anio">Año</label>
            <input type="text" class="form-control" id="anio" name="anio" value="{{ $contrato->anio }}" required>
        </div>
        <div class="form-group">
            <label for="estatus">Estatus</label>
            <input type="text" class="form-control" id="estatus" name="estatus" value="{{ $contrato->estatus }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection

