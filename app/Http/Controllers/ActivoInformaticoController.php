<?php

namespace App\Http\Controllers;

use App\Models\ActivoInformatico;
use Illuminate\Http\Request;

class ActivoInformaticoController extends Controller
{
    public function index()
    {
        $activos = ActivoInformatico::all();
        return view('activos.index', compact('activos'));
    }

    public function create()
    {
        return view('activos.create');
    }

    public function store(Request $request)
    {
        $activo = new ActivoInformatico($request->all());
        $activo->save();
        return redirect()->route('activos.index')->with('message', 'Activo creado exitosamente.');
    }

    public function edit($id)
    {
        $activo = ActivoInformatico::find($id);
        return view('activos.edit', compact('activo'));
    }

    public function update(Request $request, $id)
    {
        $activo = ActivoInformatico::find($id);
        $activo->update($request->all());
        return redirect()->route('activos.index')->with('message', 'Activo actualizado exitosamente.');
    }

    public function destroy(Request $request)
    {
        $ids = $request->ids;
        ActivoInformatico::whereIn('idActivoInformatico', $ids)->delete();
        return redirect()->route('activos.index')->with('message', 'Activo(s) eliminado(s) exitosamente.');
    }
}




?>
