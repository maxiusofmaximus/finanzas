<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoriaIngreso;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = CategoriaIngreso::all();
        $ingresos = Ingreso::all();

        return view('ingresos.index', compact('ingresos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaIngreso::all();
        $ingresos = Ingreso::all();

        return view('ingresos.create', compact('ingresos', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        
        $request->validate([
            'nombre_categoria' => 'required|string|min:3|max:100',
            'monto' => 'required|numeric',
            'fecha' => 'required|date',
            'nombre' => 'required|string|min:3|max:100',
        ]);

        CategoriaIngreso::create([
            'nombre' => $request->input('nombre_categoria'),
            'created_at' => $request->input('fecha'),
            'updated_at' => $request->input('fecha'),
        ]);

        $fecha_sin_hora = Carbon::parse($request->fecha);
        $ingresos = new Ingreso();
        $ingresos->user_id = auth()->id();
        $categorias = CategoriaIngreso::orderBy('id', 'desc')->first();
        
        Ingreso::create([
            'user_id' => $ingresos->user_id,
            'nombre' => $request->input('nombre'),
            'monto' => $request->input('monto'),
            'fecha' => $fecha_sin_hora,
            'created_at' => $request->input('fecha'),
            'updated_at' => $request->input('fecha'),
            'categoria_id' => $categorias->id,
        ]);

        return redirect()->route('ingresos.index');

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
