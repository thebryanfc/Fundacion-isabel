@extends('layouts.app')

@section('title', 'Fundación Isabel')
@section('content')
<link rel="stylesheet" href="{{ asset('css/sytle.css') }}">

   <!-- Sección con fondo de imagen oscurecida -->
    <div class="hero-section d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('/images/FI-div-1.jpg');">
        <div class="overlay"></div>
        <div class="content position-relative">
            <small class="text-uppercase">DESCUBRE TU PODER</small>
            <h1 class="display-3 fw-bold">Fundación Isabel</h1>
            <p class="lead">Trabajamos para garantizar una vida libre de desigualdad y discriminación para todas las mujeres.</p>
        </div>
    </div>


<!-- Sección: Violencia Económica -->
<section class="violencia-economica-section d-flex align-items-center" style="background-image: url('/images/FI-div-2.jpg');">
    <div class="container text-end">
        <div class="texto-fondo p-4">
            <small class="text-uppercase text-white">Violencia económica</small>
            <hr class="bg-light">
            <p class="text-white fs-4 fw-semibold">
                Es la privación intencionada de recursos necesarios para el bienestar de las mujeres y sus dependientes, así como la discriminación en el acceso a recursos compartidos en el hogar o pareja.
            </p>
            <a href="#" class="btn btn-purple mt-3">¿ESTOY SUFRIENDO VIOLENCIA ECONÓMICA?</a>
        </div>
    </div>
</section>


<!-- 3ER DIV con 3 columnas en una fila -->
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body" style="text-align: center;">
                <img src="/images/FI-row-1.png" class="img-fluid my-4" style="max-width: 200px;">
                <h3 class="card-title">Eventos</h3>
                <p class="card-text">
                    Contamos con eventos durante todo el año
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4" style="text-align: center;">
        <div class="card h-100 shadow">
            <div class="card-body">
                <img src="/images/FI-row-2.jpg" class="img-fluid my-4" style="max-width: 200px;">
                <h3 class="card-title">SALUD</h3>
                <p class="card-text">
                    Ayuda psicológica gratuita
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4"  style="text-align: center;">
        <div class="card h-100 shadow">
            <div class="card-body">
                <img src="/images/FI-row-3.jpg" class="img-fluid my-4" style="max-width: 200px;">
                <h3 class="card-title">Conciencia</h3>
                <p class="card-text">
                    Cuidado emocional, físico y mental
                </p>
            </div>
        </div>
    </div>
</div>

<section class="brecha-salarial-section position-relative py-5">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12">
                <!-- Imagen de fondo -->
                <div class="img-container position-relative">
                    <img src="/images/FI-div-3.jpg" class="img-fluid w-100 rounded shadow">
                    
                    <!-- Tarjeta superpuesta -->
                    <div class="brecha-card position-absolute p-4 shadow">
                        <small class="text-uppercase text-muted">Brecha salarial</small>
                        <hr>
                        <p class="fs-5 fw-medium">
                            La brecha salarial de género es la diferencia entre las retribuciones salariales de los hombres y de las mujeres expresada como un porcentaje del salario masculino, de acuerdo con la OCDE.
                        </p>
                        <a href="#" class="btn btn-purple mt-3">¿SOY PARTE DE ESA BRECHA SALARIAL?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Sobre nosotros | falta arreglar el div -->
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body">
                <img src="/images/FI-nosotros-2.png">
                <h6 class="card-title">SOBRE NOSOTROS</h6>
                <H2>Ayudamos a las mujeres a nunca dudar de lo valiosas que son.</H2>
                <p class="card-text">
                   Creemos en su fuerza y potencial, y trabajamos para que cada una descubra su valor y construya un futuro libre de violencia y lleno de posibilidades. Queremos empoderarlas para que tomen el control de sus vidas, 
                   alcancen sus sueños y rompan cualquier barrera que limite su crecimiento personal y profesional
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Nuestros Aliados -->
<div class="row" style="text-align: center;">
    <div class="col-md-12 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body">
                <h2 class="card-title">NUESTROS ALIADOS</h2>
                <img src="/images/FI-aliados-1.png" class="img-fluid my-4" style="max-width: 330px;">
                <img src="/images/FI-aliados-2.png" class="img-fluid my-4" style="max-width: 330px;">
                <img src="/images/FI-aliados-3.png" class="img-fluid my-4" style="max-width: 330px;">
            </div>
        </div>
    </div>
</div>

<!-- Eventos -->
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body">
                <h6 class="card-title">EVENTOS</h6>
                <H2>
                    Se parte de nuestros eventos
                    <img src="/images/FI-eventos-1.png" class="img-fluid my-4" style="max-width: 100px;">
                </H2>
                
            </div>
        </div>
    </div>
</div>


@endsection