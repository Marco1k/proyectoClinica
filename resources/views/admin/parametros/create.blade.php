@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear parametro</h1>
@stop

@section('content')


    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.parametros.store']) !!}

            @include('admin.parametros.partials.form')




            {!! form::submit('Crear parametro', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

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
