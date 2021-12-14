<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la cita']) !!}

    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Nombre:') !!}
    {!! Form::text('slug', null,['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la cita', 'readonly']) !!}

    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
    <small class="text-danger">{{$message}}</small>
    @enderror


</div>

<div class="form-group">
    <p class="font-weight-bold">Tipos</p>

    @foreach($tipos as $tipo)
        <label class="mr-2">
            {!! Form::checkbox('tipos[]',$tipo->id,null) !!}
            {!! $tipo->name !!}
        </label>
    @endforeach



    @error('tipos')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror


</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($cita->image)
                <img id="picture" src="{{'http://localhost/CLINICA/' .$cita->image->url}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2013/07/18/20/26/sea-164989_960_720.jpg" alt="">
            @endif

        </div>
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en la cita') !!}
            {!! Form::file('file', ['class' => 'form-control-life', 'accept'=> 'image/*']) !!}

            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>



        <p>Esta imagen será por si quieres aportar información adicional. No es obligatorio.</p>
    </div>


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


<div class="form-group">

    {{Form::date('Fecha', \Carbon\Carbon::today(),['class' => 'form-control mb-2 mr-sm-2 mb-sm-0'])}}
    {{Form::time('Hora', \Carbon\Carbon::now()->timezone('Europe/Brussels')->format('H:i'),['class' => 'form-control'])}}

    @error('fecha')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('status', 'Estado de la cita:') !!}
    {!! Form::text('status', 1,['placeholder' => 'La cita está por aceptar aún', 'readonly']) !!}
</div>



