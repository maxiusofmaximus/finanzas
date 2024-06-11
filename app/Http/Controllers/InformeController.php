<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingreso;
use App\Models\Gasto;

class InformeController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        $ingresos = Ingreso::where('user_id', $user_id)->sum('monto');
        $gastos = Gasto::where('user_id', $user_id)->sum('monto');
        $ahorros = $ingresos - $gastos;

        return view('informes.index', compact('ingresos', 'gastos', 'ahorros'));
    }

}
