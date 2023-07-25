@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
<h1>Lista de Empleado Actividades</h1>
    <a href="{{ route('empleadoactividades.create') }}" class="btn btn-primary">Crear Empleado Actividad</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Empleado</th>
                <th>Nombre Empleado</th>
                <th>Actividad</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleadoActividades as $empleadoActividad)
                <tr>
                    <td>{{ $empleadoActividad['idEmpActivid'] }}</td>
                    <td>{{ $empleadoActividad['idempleado'] }}</td>
                    <td>{{ $empleadoActividad['nombreEmpleado'] }}</td>
                    <td>{{ $empleadoActividad['actividad'] }}</td>
                    <td>{{ $empleadoActividad['fechaInicio'] }}</td>
                    <td>{{ $empleadoActividad['fechaFin'] }}</td>
                    <td>{{ $empleadoActividad['estado'] }}</td>
                    <td>
                        <a href="{{ route('empleadoactividades.show', $empleadoActividad['idEmpActivid']) }}"
                            class="btn btn-info">Ver</a>
                        <a href="{{ route('empleadoactividades.edit', $empleadoActividad['idEmpActivid']) }}"
                            class="btn btn-primary">Editar</a>
                        <form action="{{ route('empleadoactividades.destroy', $empleadoActividad['idEmpActivid']) }}"
                            method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop