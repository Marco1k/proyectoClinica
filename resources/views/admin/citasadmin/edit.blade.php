@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Conceder permiso o no.</h1>
@stop

@section('content')

@if(session('info'))

    <div>
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    </div>
    @endif


   <div class="card">
        <div class="card-body">


            {!! Form::model($aEditar, ['route' => ['admin.citasadmin.update',$aEditar], 'method'=>'put']) !!}
            <p class="h5">Nombre</p>
            <p class="form-control">{{$aEditar->name}}</p>

            <div class="form-group">
                <p class="font-weight-bold">Estado</p>
                <label>
                    {!! Form::radio('Status', 1) !!}
                    No aceptar
                </label>

                <label>
                    {!! Form::radio('Status', 2) !!}
                    Aceptar
                </label>
            <div>
                {!! Form::submit('Asignar estado', ['class' => 'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
            </div>
                {!! Form::close() !!}
        </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
