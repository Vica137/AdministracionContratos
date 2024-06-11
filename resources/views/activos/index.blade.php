@extends('layouts.app')

@section('content')
    <h1>Activos Informáticos</h1>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ route('activos.create') }}" class="btn btn-primary">Crear Activo</a>
    <form action="{{ route('activos.destroy') }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar los activos seleccionados?');">
        @csrf
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>ID Activo</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>ID Subcategoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activos as $activo)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $activo->idActivoInformatico }}"></td>
                        <td>{{ $activo->idActivoInformatico }}</td>
                        <td>{{ $activo->nombre }}</td>
                        <td>{{ $activo->categoria }}</td>
                        <td>{{ $activo->idSubcategoria }}</td>
                        <td>
                            <a href="{{ route('activos.edit', $activo->idActivoInformatico) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection

