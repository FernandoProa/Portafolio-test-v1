@extends('layouts.app')
@section('content')
    <section id="start" class="home-info container-fluid">
        <div class="img-home"></div>
        <div class="container-fluid h-100">
            <div class="row text-center">
                <div class="col-lg-7 align-self-center text-center text-white">
                    <h1 class="fw-bolder">¡Hola!</h1>
                    <h1 class="fw-bolder">Soy *****</h1>
                    <h3 class="fw-bold">Ingeniero en ****</h3>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="img/home.jpg"
                         style="max-height: 400px; max-width:300px; border-radius: 100px;"
                         alt="imagen mono test">
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="container mt-5">
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
    <section class="container mt-5">
        <div class="row align-self-center align-content-center text-center">
            <h3 class="fw-bolder">Tecnologías usadas: </h3>

            <div class="row py-5">
                <span class="text-black-50">Lenguajes de programación: </span>

                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/sql-language.png" alt="sql">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/php-logo2.png" alt="php">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/js.png" alt="vue">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/ts.png" alt="vue">
                </div>
            </div>
            <div class="row">
                <span class="text-black-50">Frameworks</span>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/bootstrap-logo.png" alt="bootstrap">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/Tailwind_CSS_Logo.svg.png" alt="tailwind">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/laravel-logo.png" alt="laravel">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/vuejs-logo.png" alt="vue">
                </div>
            </div>
            <div class="row py-5">
                <span class="text-black-50">Herramientas</span>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/aws.png" alt="aws">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/whm-cpanel.png" alt="cpanel&whm">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/linux.png" alt="linux">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/phpstorm.png" alt="phpstorm">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/vscode.png" alt="vscode">
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <img class="img-tech" src="img/git.png" alt="git">
                </div>
            </div>
        </div>
    </section>
    <section class="container my-5" id="experience">
        <div class="row text-center">
            <div class="col-12"><h3 class="fw-bolder">Experiencia Profesional: </h3></div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img class="img-experience" src="img/olyteam.png" alt="logo olyteam">
            </div>
            <div class="col-md-4">
                <img class="img-experience" src="img/crediplus.png" alt="logo crediplus">
            </div>
            <div class="col-md-4">
                <img class="img-experience" src="img/dwit2.jpg" alt="logo DWIT MEXICO">
            </div>

        </div>
    </section>
    <section class="container my-5" id="contact">
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
