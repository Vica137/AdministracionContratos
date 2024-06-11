<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index()
    {
        return response()->json(Contrato::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'idContrato' => 'required|integer',
            'anio' => 'required|string|max:4',
            'estatus' => 'required|string|max:1',
        ]);

        $contrato = Contrato::create($request->all());
        return response()->json($contrato, 201);
    }

    public function show($id)
    {
        $contrato = Contrato::findOrFail($id);
        return response()->json($contrato);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'anio' => 'sometimes|required|string|max:4',
            'estatus' => 'sometimes|required|string|max:1',
        ]);

        $contrato = Contrato::findOrFail($id);
        $contrato->update($request->all());
        return response()->json($contrato);
    }

    public function destroy($id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();
        return response()->json(null, 204);
    }

    public function destroy($id)
{
    $contrato = Contrato::findOrFail($id);
    $contrato->delete();

    return redirect()->route('contratos.index')->with('success', 'Contrato eliminado exitosamente.');
}
}

