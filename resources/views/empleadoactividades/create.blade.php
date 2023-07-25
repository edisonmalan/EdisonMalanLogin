@extends('layouts.app')

@section('content')
    <h1>Crear Empleado Actividad</h1>
    <form action="{{ route('empleadoactividades.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="idempleado">ID Empleado</label>
            <input type="number" class="form-control" id="idempleado" name="idempleado" required>
        </div>
        <div class="form-group">
            <label for="nombreEmpleado">Nombre Empleado</label>
            <input type="text" class="form-control" id="nombreEmpleado" name="nombreEmpleado" required>
        </div>
        <div class="form-group">
            <label for="actividad">Actividad</label>
            <input type="text" class="form-control" id="actividad" name="actividad" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
        </div>
        <div class="form-group">
            <label for="fechaFin">Fecha Fin</label>
            <input type="date" class="form-control" id="fechaFin" name="fechaFin" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="number" class="form-control" id="estado" name="estado" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('empleadoactividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
