@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Presupuesto</h1>
    <form action="{{ route('presupuestos.update', $presupuesto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Presupuesto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $presupuesto->name }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Monto</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $presupuesto->amount }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

