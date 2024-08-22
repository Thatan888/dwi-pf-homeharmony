@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center text-light">Articles</h1>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-light rounded" style="background-color: #BFE9BF; height: 100%;">
                    <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('imagesArticles/' . $article->article_image) }}" class="img-fluid rounded-start" alt="Article Image" />
                            </div>
                            <div class="col-md-7 d-flex flex-column">
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ $article->description }}</p>
                                    <p class="card-text"><strong>Price:</strong> ${{ $article->price }}</p>
                                    <p class="card-text"><strong>Category:</strong> {{ $article->category->name }}</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .card {
        transition: all 0.3s ease-in-out;
        border: 1px solid #e0e0e0;
        background-color: #BFE9BF; /* Color de fondo aplicado a las tarjetas */
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-color: #007bff;
        transform: translateY(-5px);
    }

    .wide-image {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .card-img-top {
        object-fit: cover;
        height: 100%;
        border-radius: 0.25rem 0 0 0.25rem;
    }

    .card-body {
        background-color: #BFE9BF; /* Color de fondo aplicado al cuerpo de la tarjeta */
        flex-grow: 1;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
