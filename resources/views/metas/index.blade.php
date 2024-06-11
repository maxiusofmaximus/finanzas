@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Meta Financiera</h2>
    <form action="{{ route('metas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="monto_objetivo">Monto Objetivo</label>
            <input type="text" name="monto_objetivo" id="monto_objetivo" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_limite">Fecha Límite</label>
            <input type="date" name="fecha_limite" id="fecha_limite" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
