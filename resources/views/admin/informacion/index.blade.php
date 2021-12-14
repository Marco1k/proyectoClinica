@extends('adminlte::page')
@section('title', 'Clinica')

@section('content_header')
    <h1>Lista de solicitudes de información</h1>
@stop


@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-header">
            @can('admin.informacion.create')
                <a class="btn btn-secondary" href="{{route('admin.informacion.create')}}">Agregar solicitud</a>
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
                    @foreach($data as $info)
                    <tr>
                        <td>{{$info->id}}</td>
                        <td>{{$info->titulo}}</td>
                        <td width="10px">
                            @can('admin.informacion.destroy')
                                <form action="{{route('admin.informacion.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </ta
        </div>
    </div>
@stop

