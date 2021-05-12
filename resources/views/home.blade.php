@extends('app')

@section('content')
<p>Estas en home</p>
<div class="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/img3.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="overlay">
                    <div class="container">
                        <div class="row h-100 align-items-center">
                            <div class="offset-md-6 col-md-6 text-md-right text-center">
                                <h3>TecnoEduca</h3>
                                <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    optio suscipit, cum
                                    adipisci doloremque ad voluptatum ducimus error perspiciatis voluptatem.</p>
                                <a href="{{route ('registro')}}" class="btn btn-outline-light">Quiero ser alumno</a>
                                <a href="#" class="btn btn-tecnoeduca">Mas informacion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>

    <!-- CARDS -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4 text-uppercase">
                    <small>Conoce nuestros</small>
                    <h2>Cursos</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="./images/html.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">HTML</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver curso</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="./images/css.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">CSS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver curso</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mx-auto mb-5">
                    <div class="card">
                        <img class="card-img-top" src="./images/javascript.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver curso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

