<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presupuesto;

class PresupuestoController extends Controller
{
    // Crear presupuesto
    public function create(Request $request)
    {
        $presupuesto = Presupuesto::create($request->all());
        return response()->json($presupuesto, 201);
    }

    // Leer todos los presupuestos
    public function index()
    {
        return Presupuesto::all();
    }

    // Leer un presupuesto
    public function show($id)
    {
        return Presupuesto::find($id);
    }

    // Actualizar presupuesto
    public function update(Request $request, $id)
    {
        $presupuesto = Presupuesto::findOrFail($id);
        $presupuesto->update($request->all());
        return response()->json($presupuesto, 200);
    }

    // Eliminar presupuesto
    public function delete($id)
    {
        Presupuesto::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}

