<x-app-layout>


    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Tipo: {{$tipo->name}}</h1>

        @foreach($citas as $cita)
            <x-card-cita :cita="$cita" />
        @endforeach

        <div class="mt-4">
            {{$citas->links()}}
        </div>

    </div>




</x-app-layout>
