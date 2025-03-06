<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empleado;
use App\Models\Oficina;

class OficinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficinas.index', compact('oficinas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oficinas.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
        ]);

        Oficina::create($request->all());

        return redirect()->route('oficinas.index')->with('success', 'Oficina creada con éxito.');
    }

    public function show(Oficina $oficina)
    {
        return view('oficinas.show', compact('oficina'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}