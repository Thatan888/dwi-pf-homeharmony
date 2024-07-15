@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Inicio</h1>
        <p class="lead">Usuario autenticado</p>
        @endauth

        @guest
        <div class="container-fluid responsive-container" style="background-color: #53ACAF;">
            <div class="text-center">
                <h1 class="text-dark pt-4">HomeHarmony</h1>
                <p class="p-5 text-dark">
                    En HomeHarmony, creemos que cada espacio cuenta una historia y cada mueble es
                    una pieza esencial en ese relato. Nos dedicamos a ofrecerte una selección cuidadosamente
                    curada de artículos mobiliarios que combinan diseño, funcionalidad y calidad. Desde sofás
                    acogedores hasta mesas elegantes, cada uno de nuestros productos está diseñado para
                    transformar tu hogar o espacio de trabajo en un lugar que inspire comodidad y estilo.
                </p>
            </div>
        </div>

        <div class="container containerbg pt-4">
            <p class="text-dark text-center fs-1">Populares</p>
            <div class="row">
                <div class="col-6 col-md-4 card-wrapper">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./images/Catálogo/el-ultimo-invierno.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">El Último Invierno</h5>
                                    <p class="card-text">Una historia de amor llena de sorpresas</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Director: Paquita Head</li>
                                        <li class="list-group-item">Detalles: <br> Romance, Acción</li>
                                    </ul>
                                    <div class="text-center mt-3">
                                        <a href="detalles.php" class="btn btn-success me-2" role="button">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 card-wrapper">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./images/Catálogo/el-ultimo-invierno.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">El Último Invierno</h5>
                                    <p class="card-text">Una historia de amor llena de sorpresas</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Director: Paquita Head</li>
                                        <li class="list-group-item">Detalles: <br> Romance, Acción</li>
                                    </ul>
                                    <div class="text-center mt-3">
                                        <a href="detalles.php" class="btn btn-success me-2" role="button">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 card-wrapper">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./images/Catálogo/el-ultimo-invierno.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">El Último Invierno</h5>
                                    <p class="card-text">Una historia de amor llena de sorpresas</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Director: Paquita Head</li>
                                        <li class="list-group-item">Detalles: <br> Romance, Acción</li>
                                    </ul>
                                    <div class="text-center mt-3">
                                        <a href="detalles.php" class="btn btn-success me-2" role="button">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        @endguest
    </div>
@endsection
