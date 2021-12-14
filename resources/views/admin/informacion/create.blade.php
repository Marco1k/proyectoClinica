@extends('adminlte::page')
@section('title', 'Clinica')

@section('content_header')
    <h1>Crear solicitud</h1>
@stop

@section('content')


    <div class="card">
        <div class="card-body">

            @if(session('info'))
                <div class="alert alert-success">
                    <strong>{{session('info')}}</strong>
                </div>
            @endif


            {!! Form::open(['route' => 'admin.informacion.store']) !!}

                <div class="form-group">
                    {!! form::label('titulo', 'Nombre') !!}
                    {!! form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la solicitud']) !!}

                    @error('titulo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

            <div class="form-group">
                {!! form::label('slug', 'Slug') !!}
                {!! form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la solicitud','readonly']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>


            <div class="form-group">
                {!! Form::label('extract', 'Extracto:') !!}
                {!! Form::textarea('extract',null,['class' => 'form-control']) !!}

                @error('extract')
                <small class="text-danger">{{$message}}</small>
                @enderror


            </div>

            <div class="form-group">
                {!! Form::label('body', 'Cuerpo de la cita:') !!}
                {!! Form::textarea('body',null,['class' => 'form-control']) !!}

                @error('body')
                <small class="text-danger">{{$message}}</small>
                @enderror


            </div>



            {!! form::submit('Crear solicitud', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#titulo").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });


        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>

@endsection
