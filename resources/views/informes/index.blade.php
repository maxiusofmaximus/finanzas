@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Informe de Finanzas Personales</h2>
    <div class="card">
        <div class="card-body">
            <p>Ingresos Totales: {{ $ingresos }}</p>
            <p>Gastos Totales: {{ $gastos }}</p>
            <p>Ahorros: {{ $ahorros }}</p>
        </div>
    </div>
</div>
@endsection
