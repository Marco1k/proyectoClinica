<div class="card">


    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Busque una cita ...">
    </div>

    @if($citas->count())

    <div class="card-body">



        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>

            @foreach($citas as $cita)
                <tr>
                    <td>{{$cita->id}}</td>
                    <td>{{$cita->name}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.citas.edit', $cita)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.citas.destroy',$cita)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$citas->links()}}
    </div>

        @else
        <div class="card-body">
            <strong>No hay ningún registro</strong>
        </div>
        @endif

</div>
