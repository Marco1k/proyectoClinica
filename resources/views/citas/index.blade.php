<x-app-layout>



    <div class="container py-8">
        <p></p>

        <h1 style="text-align: center; font-weight: bold;" class="headline">Clínica dental de Marco Medest</h1>
        <p></p>
        <h2 style="font-weight: bold; text-align: center; font-size: 18px;">Tu clínica dental de confianza en Sevilla</h2>
        <p></p>
        <div class="module text"><p style="text-align: center;" class="bodytext">Si necesita&nbsp;una <span style="font-weight: bold;">
                    <a>una clínica dental </a></span>,
                    <span style="font-weight: bold;">en Sevilla, clinica MarcoMedest</span>
                    estamos a su disposición para darle la mejor estética a su sonrisa y cuidar de su salud bucodental.
                Estamos especializados en odonpediatra y otros campos, tanto infantil como adulta, además de todo aquello relacionado con la estética dental.</p>
        <p>En esta página podrá solicitar citas y será informado de cualquier tipo de inconveniente que pueda surgir.
            Para acceder deberá tener un usuario, el cual se le puede facilitar al acudir a su primera cita, pregunte en el mostrador y le atenderemos sin ningún problema.</p></div>

        <div id="left">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner"  min-height="300px">
                    <div class="carousel-item active">
                        <img src="https://i.imgur.com/PjmeX3f.png" class="d-block w-100" alt="" width="500px" height="250px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.imgur.com/vtblqNs.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.imgur.com/bpku28C.png" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.imgur.com/lbsN9na.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.imgur.com/OcF7LTJ.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://us.123rf.com/450wm/pressmaster/pressmaster1105/pressmaster110500230/9494585-grupo-de-ni%C3%B1os-alegres-peeping-en-c%C3%A1mara-.jpg?ver=6" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>

        </div>



        <div class="flex justify-center items-center h-screen " >


            @can('admin.categories.create')
            <a class="twitter-timeline" href="https://twitter.com/cdental4?lang=es"
               data-widget-id="302069386464870402"
               data-chrome="noheader noborders transparent"
               align="right">
                Tweets por @clinicadental
            </a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            @endcan

            @cannot('admin.categories.create')
                <a class="twitter-timeline" href="https://twitter.com/gacetadental?lang=es"
                   data-widget-id="302069386464870402"
                   data-chrome="noheader noborders transparent"
                   align="right">
                    Tweets por @gacetadental
                </a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
                }
           @endcannot

        </div>

        <p></p>


    </div>


    <h2 class="text-center">Listado de citas</h2>
    <div class="container py-8" >
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($citas as $cita)

                <article>

                    <div class="card text-white bg-dark mb-3 text-white w-full h-full px-8 flex flex-col justify-center overflow-hidden ">

                        <img src="@if($cita->image)
                        {{--
                            'http://localhost/CLINICA/' .$cita->image->url

                           --}}
                            https://cdn.pixabay.com/photo/2016/09/14/20/50/teeth-1670434_960_720.png
                             @else https://cdn.pixabay.com/photo/2016/09/14/20/50/teeth-1670434_960_720.png
                        @endif" alt=""/>

                         <div class="card-img-overlay">

                             <div class="card-title">
                                 @foreach($cita->tipos as $tipo)
                                     <a href="{{route('citas.tipo',$tipo)}}" class="inline-block px-3 h-6 bg-{{$tipo->color}}-600 text-black rounded-full">{{$tipo->name}}</a>
                                 @endforeach
                             </div>
                             <div class="p-8 mt-2 flex items-left bg-gray-200 bg-opacity-50">
                                 <h1 class="card-text text 4x1 text-white leading-8 font-bold mt-2 ">
                                     <a href="{{route('citas.show', $cita)}}">

                                         {{$cita->name}}
                                     </a></h1>
                             </div>

                        </div>
                    </div>

                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$citas->links()}}
        </div>

    </div>



</x-app-layout>

@section('styles')


    <style>

        div.centrar{
            position: center;
        }

    </style>
@endsection
