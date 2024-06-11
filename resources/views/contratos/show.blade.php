@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Tabla de Contratos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID Contrato</th>
                <th>Año</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contratos as $contrato)
                <tr>
                    <td>{{ $contrato->id }}</td>
                    <td>{{ $contrato->anio }}</td>
                    <td>{{ $contrato->estatus }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

