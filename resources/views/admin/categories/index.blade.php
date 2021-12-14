@extends('adminlte::page')
@section('title', 'Clinica')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop


@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-header">
            @can('admin.categories.create')
                <a class="btn btn-secondary" href="{{route('admin.categories.create')}}">Agregar categoría</a>
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
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td width="10px">
                            @can('admin.categories.edit')
                                <a class="btn btn-primary btn-sm" href="{{route ('admin.categories.edit', $category)}}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.categories.destroy')
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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

