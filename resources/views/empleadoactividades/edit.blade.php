@extends('layouts.app')

@section('content')
    <h1>Editar Empleado Actividad</h1>
    <form action="{{ route('empleadoactividades.update', $empleadoActividad['idEmpActivid']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="idempleado">ID Empleado</label>
            <input type="number" class="form-control" id="idempleado" name="idempleado" value="{{ $empleadoActividad['idempleado'] }}" required>
        </div>
        <div class="form-group">
            <label for="nombreEmpleado">Nombre Empleado</label>
            <input type="text" class="form-control" id="nombreEmpleado" name="nombreEmpleado" value="{{ $empleadoActividad['nombreEmpleado'] }}" required>
        </div>
        <div class="form-group">
            <label for="actividad">Actividad</label>
            <input type="text" class="form-control" id="actividad" name="actividad" value="{{ $empleadoActividad['actividad'] }}" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="{{ $empleadoActividad['fechaInicio'] }}" required>
        </div>
        <div class="form-group">
            <label for="fechaFin">Fecha Fin</label>
            <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="{{ $empleadoActividad['fechaFin'] }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="number" class="form-control" id="estado" name="estado" value="{{ $empleadoActividad['estado'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleadoactividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
