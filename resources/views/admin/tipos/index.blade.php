@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Etiquetas</h1>
@stop


@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-header">
            @can('admin.tipos.create')
                <a class="btn btn-secondary" href="{{route('admin.tipos.create')}}">Agregar tipo</a>
            @endcan
        </div>



        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <th>ID</th>
                <th>NAME</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach($tipos as $tipo)
                    <tr>
                        <td>{{$tipo->id}}</td>
                        <td>{{$tipo->name}}</td>
                        <td width="10px">
                            @can('admin.tipos.edit')
                                <a class="btn btn-primary btn-sm" href="{{route ('admin.tipos.edit', $tipo)}}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.tipos.destroy')
                                <form action="{{route('admin.tipos.destroy', $tipo)}}" method="POST">
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
