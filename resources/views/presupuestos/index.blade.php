@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Presupuestos</h1>
    <a href="{{ route('presupuestos.create') }}" class="btn btn-primary mb-3">Crear Presupuesto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Monto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($presupuestos as $presupuesto)
            <tr>
                <td>{{ $presupuesto->id }}</td>
                <td>{{ $presupuesto->name }}</td>
                <td>{{ $presupuesto->amount }}</td>
                <td>
                    <a href="{{ route('presupuestos.edit', $presupuesto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('presupuestos.destroy', $presupuesto->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

