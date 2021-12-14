@extends('adminlte::page')
@section('title', 'Noticias')

@section('content_header')
    <h1>Editar Parametro</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            {!! Form::model($parametro, ['route' => ['admin.parametros.update', $parametro], 'method' => 'put']) !!}

            @include('admin.parametros.partials.form')

            {!! form::submit('Actualizar parametro', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#parametro").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection
