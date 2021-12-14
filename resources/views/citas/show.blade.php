<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4x1 font bold text-gray-600 ">{{$cita->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!  $cita->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{--contenido principal--}}
            <div class="lg:col-span-2">
                <figure>
                    @if($cita->image)
                     {{--   <img class="w-full h-80 object-cover object-center" src="{{ 'http://localhost/CLINICA/' .$cita->image->url}}"  alt=""/> --}}
                        <img src="https://st3.depositphotos.com/6222352/12491/v/450/depositphotos_124918080-stock-illustration-cute-cartoon-super-dentist-doctor.jpg" class="w-full h-80 object-cover object-center" alt=""/>

                    @else
                        <img src="https://cdn.pixabay.com/photo/2020/05/19/09/21/flower-5189902_960_720.jpg" class="w-full h-80 object-cover object-center" alt=""/>
                    @endif


                </figure>

            <div class="text-base text-gray-500 mt-4">
                {!! $cita->body!!}
            </div>

            </div>
            {{--contenido relacionado--}}
            <aside>
                <h1 class="text 2x1 font-bold text-gray-600 mb-4">Más en {{$cita->category->name}}</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">

                        <a class="flex" href="{{route('citas.show', $similar)}}">
                            @if($similar->image)

                            <img class="w-36 h-20 object-cover object-center" src="{{ 'http://localhost/CLINICA/' .$similar->image->url}}" alt="">

                            @else
                                <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/05/19/09/21/flower-5189902_960_720.jpg" alt="">

                                @endif

                            <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                        </a>

                        </li>

                    @endforeach
                </ul>


            </aside>

        </div>
    </div>

    </x-app-layout>
