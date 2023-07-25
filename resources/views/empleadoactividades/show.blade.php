@extends('layouts.app')

@section('content')
    <h1>Detalle de Empleado Actividad</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $empleadoActividad['idEmpActivid'] }}</td>
            </tr>
            <tr>
                <th>ID Empleado</th>
                <td>{{ $empleadoActividad['idempleado'] }}</td>
            </tr>
            <tr>
                <th>Nombre Empleado</th>
                <td>{{ $empleadoActividad['nombreEmpleado'] }}</td>
            </tr>
            <tr>
                <th>Actividad</th>
                <td>{{ $empleadoActividad['actividad'] }}</td>
            </tr>
            <tr>
                <th>Fecha Inicio</th>
                <td>{{ $empleadoActividad['fechaInicio'] }}</td>
            </tr>
            <tr>
                <th>Fecha Fin</th>
                <td>{{ $empleadoActividad['fechaFin'] }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $empleadoActividad['estado'] }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('empleadoactividades.index') }}" class="btn btn-primary">Volver</a>
@endsection
