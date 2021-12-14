@props(['cita'])

<article class="mb-8">

    @if($cita->image)
    <img class="w-full h-72 object-cover object-center" src="{{'http://localhost/CLINICA/' . $cita->image->url}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/05/19/09/21/flower-5189902_960_720.jpg" alt=""/>
    @endif


    <div class="px-6 py-4">
        <h1 class="font-bold text-x1 mb-2">
            <a href="{{route('citas.show', $cita)}}">{{$cita->name}}</a>
        </h1>

        <div class="text-gray-700 text-base">
            {{$cita->extract}}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach($cita->tipos as $tipo)

            <a href="{{route('citas.tipo', $tipo)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700">{{$tipo->name}}</a>
        @endforeach
    </div>


</article>

