<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Built with Blueprints app">
    <meta name="author" content="Bootstraptor.com">
    <link rel="icon" href="favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .bg-overlay {
            background: rgba(0, 0, 0, .7);
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 0;
        }
    </style>
    <!-- Plugins -->
</head>

<body>
    <section class="pt-5 pb-5 bg-dark position-relative"
        style="min-height:100vh; background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1652&q=80); background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container pt-5 pb-5 position-relative">
            <div class="row d-flex justify-content-between pt-lg-5 align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-7 text-center text-lg-left mb-5 mb-lg-0">
                    <h1 class="display-3 font-weight-bold text-white aos-init aos-animate" data-aos="fade-up">The best online store to purchase your furniture</h1>
                    <div class="my-4 aos-init" data-aos="fade-up">
                        <p class="lead text-white">Here you will find a wide range of furniture items that will be to your liking.!</p>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-start aos-init" data-aos="fade-up">
                        <div class="d-flex mr-2">
                            <i class="fas fa-star fa-lg text-warning m-1"></i>
                            <i class="fas fa-star fa-lg text-warning m-1"></i>
                            <i class="fas fa-star fa-lg text-warning m-1"></i>
                            <i class="fas fa-star fa-lg text-warning m-1"></i>
                            <i class="fas fa-star fa-lg text-warning m-1"></i>
                        </div>
                        <span class="text-white">(Average score: 4.9/5)</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-8 col-md-10 ">
                            <img class="d-block img-fluid rounded-circle pb-3"
                                                            src="{{ url('images/Logo HomeHarmony.png') }}"
                                                            alt="user">
                            <a class="btn  btn-success ml-md-3 " href="{{ route('home.app') }}">Go to the App</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="pt-5 pb-5 bg-light" style="">
        <div class="container  pt-5 pb-5">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <h3 class="display-4 font-weight-bold aos-init" data-aos="fade-up">Start building your own comfortable place with the incredible offers we have for you.</h3>
                    <p class="lead mt-4 aos-init" data-aos="fade-up">At HomeHarmony, we believe that every space tells a story and every piece of furniture is an essential piece in that story. We are dedicated to bringing you a carefully curated selection of furniture items that combine design, functionality and quality. From cozy sofas to elegant tables, each of our products is designed to transform your home or workspace into a place that inspires comfort and style.</p>
                </div>
                <div class="col-md-5 aos-init" data-aos="fade-up">
                    <div id="carouselExampleTestimonials" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="row   justify-content-center d-flex  ">
                                        <div class="col-md-12  card px-5 text-dark py-5">
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <div class="d-flex mr-2">
                                                    <i class="fas fa-star text-warning mr-1"></i>
                                                    <i class="fas fa-star text-warning mr-1"></i>
                                                    <i class="fas fa-star text-warning mr-1"></i>
                                                    <i class="fas fa-star text-warning mr-1"></i>
                                                    <i class="fas fa-star text-warning mr-1"></i>
                                                </div>
                                            </div>
                                            <blockquote class="blockquote blockquote-reverse mt-4">
                                                <p class="lead font-weight-bold mt-2">"The best store I have ever shopped at".</p>
                                                <div class="mt-3 d-flex align-items-center pt-2">
                                                    <div class="mr-3">
                                                        <img class="d-block img-fluid rounded-circle" style="height: 100px"
                                                            src="{{ url('images/Logo HomeHarmony.png') }}"
                                                            alt="user">
                                                    </div>
                                                    <div class="d-block">
                                                        <p class="mb-0">Thatan</p>
                                                        <p class="small">Development</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery is required -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>


</body>
