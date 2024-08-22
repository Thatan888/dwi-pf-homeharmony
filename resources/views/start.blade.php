@extends('layouts.app-master')

@section('content')
    <div class="">
        <div class="container-fluid p-0" style="background-color: #3B5D50; ">
            <div class="row no-gutters">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="text-center text-light p-4">
                        <h1>HomeHarmony</h1>
                        <p>
                            At HomeHarmony, we believe that every space tells a story and every piece of furniture is an
                            essential piece in that story.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('imagesArticles/couch.png') }}" alt="Imagen" class="img-fluid rounded-right"
                        style="border-radius: 10px;">
                </div>
            </div>
        </div>

        <section class="pt-5 pb-5 bg-light rounded">
            <h1 class="text-center">Why Choose Us</h1>
            <p class="text-center">We have the best quality-price in all types of furniture.</p>
            <div class="container mt-5 bg-light pt-3">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ url('icons/truck.svg') }}" alt="Imagen 1" class="img-small">
                        <p class="text-justify mt-2">Fast & Free Shipping</p>
                    </div>
                    <div class="col text-center">
                        <img src="{{ url('icons/bag.svg') }}" alt="Imagen 2" class="img-small">
                        <p class="text-justify mt-2">Easy to Shop</p>
                    </div>
                    <div class="col text-center">
                        <img src="{{ url('icons/support.svg') }}" alt="Imagen 3" class="img-small">
                        <p class="text-justify mt-2">24/7 Support</p>
                    </div>
                    <div class="col text-center">
                        <img src="{{ url('icons/return.svg') }}" alt="Imagen 4" class="img-small">
                        <p class="text-justify mt-2">Hassle Free Returns</p>
                    </div>
                </div>
            </div>

            <div class="container pt-5 pb-5">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-3 aos-init" data-aos="fade-up">
                        <div class="card">
                            <img src="imagesArticles/tables.jpg" class="card-img-top" alt="Tables View" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title text-center">Tables</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 aos-init" data-aos="fade-up">
                        <div class="card">
                            <img src="imagesArticles/camas y tocadores.jpg" class="card-img-top" alt="Beds and Dressing tables" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title text-center">Beds and Dressing Tables</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 aos-init" data-aos="fade-up">
                        <div class="card">
                            <img src="imagesArticles/sillones.jpg" class="card-img-top" alt="Armchairs" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title text-center">Armchairs</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 aos-init" data-aos="fade-up">
                        <div class="card">
                            <img src="imagesArticles/comedores.jpg" class="card-img-top" alt="Canteens" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title text-center">Canteens</h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            
            
        </section>
    </div>
@endsection
