@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Parametros</h1>
@stop


@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-header">
            @can('admin.parametros.create')
                <a class="btn btn-secondary" href="{{route('admin.parametros.create')}}">Agregar parametro</a>
            @endcan
        </div>



        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <th>ID</th>
                <th>PARAMETRO</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach($parametros as $parametro)
                    <tr>
                        <td>{{$parametro->id}}</td>
                        <td>{{$parametro->parametro}}</td>
                        <td width="10px">
                            @can('admin.parametros.edit')
                                <a class="btn btn-primary btn-sm" href="{{route ('admin.parametros.edit', $parametro)}}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.parametros.destroy')
                                <form action="{{route('admin.parametros.destroy', $parametro)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
