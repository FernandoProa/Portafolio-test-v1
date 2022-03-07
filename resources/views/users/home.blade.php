@extends('layouts.app')
@section('content')
    <section id="inicio" class="home-info container-fluid">
        <div class="img-home"></div>
        <div class="container-fluid h-100">
            <div class="row text-center">
                <div class="col-lg-7 align-self-center text-center text-white">
                    <h1 class="fw-bolder">¡Hola!</h1>
                    <h1 class="fw-bolder">Soy Fernando Hernandez Proa</h1>
                    <h3 class="fw-bold">Ingeniero en Tecnologías de la información y comunicación</h3>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="img/home.jpg"
                         style="max-height: 400px; max-width:300px; border-radius: 100px;"
                         alt="imagen mono test">
                </div>
            </div>
        </div>
    </section>
    <section id="sobre-mi" class="container pt-5">
        <div class="row">
            <div class="col-lg-7 mx-auto" style="text-align: justify;">
                <h2 class="fw-bolder">Acerca de mi: </h2>
                <div class="mt-4" style="font-size: 18px">
                    <p>¡Hola, déjame contarte sobre mí!</p>
                    <p>Soy Ingeniero en Tecnologías de la información y comunicación, graduado de la Universidad
                        Tecnológica de Cancún.
                    </p>
                    <p>Soy una persona apasionada a la tecnología, buscando siempre aportar y seguir bajo una constante
                        actualización en el campo, actualmente me desempeño como desarrollador web, con un gran gusto
                        por el Back-end, despliegue en servidores y manejo de Linux.</p>
                </div>
                <div class="my-4 text-center">
                    <button class="btn btn-primary">Descargar CV <i class="fa fa-download pl-2"></i></button>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img class="img-fluid" src="img/home.jpg"
                     style="max-height: 400px; max-width:300px; border-radius: 100px;"
                     alt="imagen mono test">
            </div>
        </div>

    </section>
    <section id="tecnologias" class="container pt-5">
        <div class="row align-self-center align-content-center text-center">
            <h3 class="fw-bolder">Tecnologías usadas: </h3>
            @foreach($techcategories as $category)
                <div class="row py-3">
                    <span class="text-black-50">{{$category->name_es }} </span>

                    @foreach($category->technologies as $tech)

                            <div class="col-6 col-sm-6 col-md-2 mx-auto">
                                <img class="img-tech" src="{{$tech->url_logo ?? ''}}" alt="{{$tech->name_es}}">
                            </div>
                    @endforeach


                </div>
            @endforeach


    </section>
    <section class="container py-5" id="experiencia">
        <div class="row text-center">
            <div class="col-12"><h3 class="fw-bolder">Experiencia Profesional: </h3></div>
        </div>
        <personal-experience-component></personal-experience-component>
    </section>
    <section class="container py-5" id="contacto">
        <div class="row">
            <div class="col-12"><h3 class="fw-bolder text-center">Puedes contactarme por este medio: </h3></div>
        </div>
        {{--        <div class="row my-5 align-self-center text-center">--}}
        {{--            <div class="col-4">--}}
        {{--                <img class="img-socialmedia" src="img/linkedin.png" alt="linkedin">--}}
        {{--            </div>--}}
        {{--            <div class="col-4">--}}
        {{--                <img class="img-socialmedia" src="img/whatsapp.png" alt="whatsapp">--}}
        {{--            </div>--}}
        {{--            <div class="col-4">--}}
        {{--                <img class="img-socialmedia" src="img/gmail.png" alt="gmail">--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <contact-form-component class="my-5"></contact-form-component>
    </section>



@stop

