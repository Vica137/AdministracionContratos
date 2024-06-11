@extends('layouts.app')

@section('content')
    <h1>Crear Activo Informático</h1>
    <form action="{{ route('activos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="idActivo">ID Activo Informático:</label>
            <input type="number" class="form-control" id="idActivo" name="idActivoInformatico" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="40" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="T">T</option>
                <option value="S">S</option>
                <option value="G">G</option>
            </select>
        </div>
        <div class="form-group">
            <label for="idSubcategoria">ID Subcategoría:</label>
            <input type="number" class="form-control" id="idSubcategoria" name="idSubcategoria" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Activo</button>
    </form>
@endsection

