@extends('layouts.app-master')

@section('content')
    <div class="">
        
        @auth
            <div id="autoDismissAlert"
                class="alert alert-warning alert-dismissible fade show text-center fw-bolder font-monospace fs-5" role="alert">
                Authenticated User
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                setTimeout(function() {
                    let alertElement = document.getElementById('autoDismissAlert');
                    if (alertElement) {
                        let alert = new bootstrap.Alert(alertElement);
                        alert.close();
                    }
                }, 4000); // 5000 milisegundos = 5 segundos
            </script>

            <div class="container-fluid p-0" style="background-color: #3B5D50; ">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="text-center text-light p-4">
                            <h1>Welcome to HomeHarmony</h1>
                            <p>
                                Welcome to the item management section of our catalog. In this area, you will have the ability
                                to create, delete, view and edit items in the HomeHarmony catalog. This functionality is
                                designed for authorized personnel only.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="{{ url('images/personal.png') }}" alt="Imagen" class="img-fluid rounded-right"
                            style="border-radius: 10px;">
                    </div>
                </div>
            </div>

            <div class="container pt-5 pb-5">
                <div class="row d-flex">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="imagesArticles/tables.jpg" class="card-img-top" alt="Tables View">
                            <div class="card-body">
                                <h5 class="card-title">Create</h5>
                                <p>Create new items with all necessary information.</p>
                                <div>
                                    <a href="{{ route('articles.create') }}" class="btn1">
                                        <i class="animation"></i>Add Item<i class="animation"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="imagesArticles/camas y tocadores.jpg" class="card-img-top" alt="Beds and Dressing Tables">
                            <div class="card-body">
                                <h5 class="card-title">Edit</h5>
                                <p>Modify the details of existing items.<br>.</p>
                                <div>
                                    <a href="{{ route('articles.index') }}" class="btn2">
                                        <i class="animation"></i>Edit Item<i class="animation"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="imagesArticles/sillones.jpg" class="card-img-top" alt="Armchairs">
                            <div class="card-body">
                                <h5 class="card-title">Delete</h5>
                                <p>Remove items that are no longer needed.</p>
                                <div>
                                    <a href="{{ route('articles.index') }}" class="btn3">
                                        <i class="animation"></i>Delete Item<i class="animation"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="imagesArticles/comedores.jpg" class="card-img-top" alt="Canteens">
                            <div class="card-body">
                                <h5 class="card-title">View</h5>
                                <p>Consult and review the details of each item.</p>
                                <div>
                                    <a href="{{ route('articles.index') }}" class="btn4">
                                        <i class="animation"></i>View Items<i class="animation"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endauth
    </div>

    <style>
        .card {
            height: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .card-title {
            margin-bottom: 1rem;
        }

        .card-body p {
            margin-bottom: 1rem;
        }

        .feature-box {
            text-align: center;
            padding: 20px;
            background: white;
            border: 1px solid #dee2e6;
            border-radius: .375rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, .15);
        }

        .feature-box .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }

        /* From Uiverse.io by mi-series */
        .btn1 {
            outline: 0;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            background: #55b340;
            min-width: 200px;
            border: 0;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
            box-sizing: border-box;
            padding: 16px 20px;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            overflow: hidden;
            cursor: pointer;
        }
        .btn2 {
            outline: 0;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            background: #afb340;
            min-width: 200px;
            border: 0;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
            box-sizing: border-box;
            padding: 16px 20px;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            overflow: hidden;
            cursor: pointer;
        }
        .btn3 {
            outline: 0;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            background: #b34040;
            min-width: 200px;
            border: 0;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
            box-sizing: border-box;
            padding: 16px 20px;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            overflow: hidden;
            cursor: pointer;
        }
        .btn4 {
            outline: 0;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            background: #40a9b3;
            min-width: 200px;
            border: 0;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
            box-sizing: border-box;
            padding: 16px 20px;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            overflow: hidden;
            cursor: pointer;
        }

        .btn1:hover {
            opacity: .95;
        }

        .btn1 .animation {
            border-radius: 100%;
            animation: ripple 0.6s linear infinite;
        }

        .btn2:hover {
            opacity: .95;
        }

        .btn2 .animation {
            border-radius: 100%;
            animation: ripple 0.6s linear infinite;
        }

        .btn3:hover {
            opacity: .95;
        }

        .btn3 .animation {
            border-radius: 100%;
            animation: ripple 0.6s linear infinite;
        }

        .btn4:hover {
            opacity: .95;
        }

        .btn4 .animation {
            border-radius: 100%;
            animation: ripple 0.6s linear infinite;
        }

        @keyframes ripple {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
            }

            100% {
                box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
            }
        }
    </style>
@endsection
