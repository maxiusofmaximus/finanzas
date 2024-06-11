<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gasto;
use Illuminate\Http\Request;
use App\Models\CategoriaGasto;
use Carbon\Carbon;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = CategoriaGasto::all();
        $gastos = Gasto::all();

        return view('gastos.index', compact('gastos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaGasto::all();
        $gastos = Gasto::all();

        return view('gastos.create', compact('gastos', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_categoria' => 'required|string|min:3|max:100',
            'monto' => 'required|numeric',
            'fecha' => 'required|date',
            'nombre' => 'required|string|min:3|max:100',
        ]);

        CategoriaGasto::create([
            'nombre' => $request->input('nombre_categoria'),
            'created_at' => $request->input('fecha'),
            'updated_at' => $request->input('fecha'),
        ]);

        $fecha_sin_hora = Carbon::parse($request->fecha);
        $gastos = new Gasto();
        $gastos->user_id = auth()->id();
        
        Gasto::create([
            'user_id' => $gastos->user_id,
            'nombre' => $request->input('nombre'),
            'monto' => $request->input('monto'),
            'fecha' => $fecha_sin_hora,
            'created_at' => $request->input('fecha'),
            'updated_at' => $request->input('fecha'),
        ]);

        return redirect()->route('gastos.index');
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
