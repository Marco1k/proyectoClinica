<div class="form-group">
    {!! form::label('parametro', 'Parametro') !!}
    {!! form::text('parametro', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del parametro']) !!}

    @error('parametro')
    <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! form::label('slug', 'Slug') !!}
    {!! form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del parametro','readonly']) !!}

    @error('slug')
    <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! form::label('valor', 'Valor') !!}
    {!! form::text('valor', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el valor del parametro']) !!}

    @error('valor')
    <span class="text-danger">{{$message}}</span>
    @enderror

</div>
