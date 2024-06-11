@extends('layouts.app')

@section('content')
    <h1>Editar Activo Informático</h1>
    <form action="{{ route('activos.update', $activo->idActivoInformatico) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $activo->nombre }}" maxlength="40" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="T" {{ $activo->categoria == 'T' ? 'selected' : '' }}>T</option>
                <option value="S" {{ $activo->categoria == 'S' ? 'selected' : '' }}>S</option>
                <option value="G" {{ $activo->categoria == 'G' ? 'selected' : '' }}>G</option>
            </select>
        </div>
        <div class="form-group">
            <label for="idSubcategoria">ID Subcategoría:</label>
            <input type="number" class="form-control" id="idSubcategoria" name="idSubcategoria" value="{{ $activo->idSubcategoria }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection

