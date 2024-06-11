@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Crear Contrato</h1>
    <form action="{{ route('contratos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="idContrato">ID Contrato:</label>
            <input type="number" class="form-control" id="idContrato" name="idContrato" required>
        </div>
        <div class="form-group">
            <label for="anio">Año:</label>
            <input type="text" class="form-control" id="anio" name="anio" maxlength="4" required>
        </div>
        <div class="form-group">
            <label for="estatus">Estatus:</label>
            <select class="form-control" id="estatus" name="estatus" required>
                <option value="S">S</option>
                <option value="N">N</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Contrato</button>
    </form>
</div>
@endsection

