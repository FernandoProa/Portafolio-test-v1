@extends('layouts.app')
@section('content')
    <section id="start" class="home-info container-fluid">
        <div class="img-home"></div>
        <div class="container-fluid h-100">
            <div class="row text-center">
                <div class="col-lg-7 align-self-center text-center text-white">
                    <h1 class="fw-bolder">¡Hola!</h1>
                    <h1 class="fw-bolder">Soy Fernando Hernandez Proa</h1>
                    <h3 class="fw-bold">Ingeniero en Tecnologías de la información y comunicación</h3>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="img/home.jpg" style="max-height: 400px; max-width:300px; border-radius: 100px;"
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
                    <p>Mi nombre es Fernando Hernandez Proa</p>
                    <p>Soy Ingeniero en Tecnologías de la información y comunicación, graduado de la Universidad Tecnológica de Cancún, cuento con experiencia en desarrollo web
                        y trabajo bajo objetivos.</p>
                    <p>Soy una persona que busca constantemente mejorar sus habilidades y conocimientos, al mismo timepo buscando aportar valiosas contribuciones a la empresa a la que pertenezco.</p>
                </div>
                <div class="my-4 text-center">
                    <button class="btn btn-primary">Descargar CV <i class="fa fa-download pl-2"></i></button>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <h3>Tecnologías usadas: </h3>
                <div class="row p-5">
                    <div class="col-sm-6 col-md-4">
                        <img class="img-tech" src="img/laravel-logo.png" alt="laravel">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="img-tech" src="img/vuejs-logo.png" alt="vue">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="img-tech" src="img/sql-logo.png" alt="sql">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="img-tech" src="img/php-logo.png" alt="php">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="img-tech" src="img/bootstrap-logo.png" alt="bootstrap">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="container my-5" id="experience">
        <div class="row text-center">
            <div class="col-12"><h1 class="fw-bolder">Experiencia Profesional: </h1></div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <img class="img-experience" src="img/olyteam.png" alt="logo olyteam">
            </div>
            <div class="col-md-6">
                <img class="img-experience" src="img/crediplus.png" alt="logo crediplus">
            </div>
        </div>
    </section>
    <section class="container my-5" id="contact">
        <div class="row">
            <div class="col-12"><h1 class="fw-bolder text-center">Contacto: </h1></div>
        </div>
       <contact-form-component></contact-form-component>
    </section>



@stop
