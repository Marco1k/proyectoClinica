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
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($citas as $cita)
                    @if($cita->Status==1)
                        <tr>
                            <td>{{$cita->id}}</td>
                            <td>{{$cita->name}}</td>
                            <td>{{$cita->Fecha}}</td>
                            <td>{{$cita->Hora}}</td>
                            <td width="10px">
                                <a class="btn btn-sm btn-primary" href="{{route('admin.citasadmin.edit', $cita)}}" >Editar</a>
                            </td>
                        </tr>
                    @endif
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
