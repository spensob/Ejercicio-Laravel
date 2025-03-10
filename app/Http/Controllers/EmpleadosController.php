<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        return view('empleados.index', compact('oficina', 'empleados'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Oficina $oficina, Empleado $empleado)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'dni' => 'required|string|max:20|unique:empleados,dni,' . $empleado->id,
            'email' => 'required|email|max:255|unique:empleados,email,' . $empleado->id,
        ]);


        $empleado = new Empleado($request->all());
        $empleado->oficina_id = $oficina->id;
        $empleado->save();

        return redirect()->route('oficinas.empleados.index', $oficina)->with('success', 'Empleado creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oficina $oficina, Empleado $empleado)
    {
        return view('empleados.edit', compact('oficina', 'empleado'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oficina $oficina, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'dni' => 'required|string|max:20|unique:empleados,dni,' . $empleado->id,
            'email' => 'required|email|max:255|unique:empleados,email,' . $empleado->id,
        ]);

        $empleado->update($request->all());
        return redirect()->route('oficinas.empleados.index', $oficina)->with('success', 'Empleado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}