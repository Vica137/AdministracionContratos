@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Presupuesto</h1>
    <form action="{{ route('presupuestos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Presupuesto</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="amount">Monto</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

