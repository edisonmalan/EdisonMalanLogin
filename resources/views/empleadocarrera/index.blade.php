@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleadocarrera') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleadocarreras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Empleado Id</th>
										<th>Carrera Id</th>
										<th>Periodo Id</th>
										<th>Fecha</th>
										<th>Estado</th>
										<th>Usuariomodifica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleadocarreras as $empleadocarrera)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empleadocarrera->empleado->nombres }}</td>
											<td>{{ $empleadocarrera->carrera->nombrecarrera }}</td>
											<td>{{ $empleadocarrera->periodo->nombre }}</td>
											<td>{{ $empleadocarrera->fecha }}</td>
											<td>{{ $empleadocarrera->estado }}</td>
											<td>{{ $empleadocarrera->usuariomodifica }}</td>

                                            <td>
                                                <form action="{{ route('empleadocarreras.destroy',$empleadocarrera->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleadocarreras.show',$empleadocarrera->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleadocarreras.edit',$empleadocarrera->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleadocarreras->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop