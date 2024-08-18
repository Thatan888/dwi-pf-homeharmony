@extends('layouts.app-master')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container">
    <div class="card">
        <div class="card-header" style="background-color: #BFE9BF;">
            <div class="row">
                <div class="col col-md-6 fs-1"><b>Furniture Categories Data</b></div>
                <div class="col col-md-6 text-end">
                    <a href="{{ route('categories.create') }}" class="custom-link">Add Category</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (count($categories) > 0)
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('categories.show', $category->id) }}" class="category-card-link">
                                <div class="category-card card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $category->name }}</h5>
                                        <p class="card-text">{{ $category->description }}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('categories.edit', $category->id) }}" class="button edit-button" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svgIcon">
                                                    <path d="M18 2L15.585938 4.4140625L19.585938 8.4140625L22 6L18 2zM14.076172 5.9238281L3 17L3 21L7 21L18.076172 9.9238281L14.076172 5.9238281z"></path>
                                                </svg>
                                            </a>
                                            <form method="post" action="{{ route('categories.destroy', $category->id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="button button1" title="Delete">
                                                    <svg viewBox="0 0 448 512" class="svgIcon">
                                                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {!! $categories->links() !!}
            @else
                <div class="text-center">
                    <p>No Data Found</p>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    .custom-link {
        color: #ecf0f1;
        font-size: 17px;
        background-color: #3B5D50;
        border: 1px solid #ffffff;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px;
        box-shadow: 0px 6px 0px #578775;
        transition: all 0.1s;
        display: inline-block;
        text-decoration: none;
    }

    .custom-link:hover {
        color: #ecf0f1;
        background-color: #2e4a41;
    }

    .category-card {
        border: 1px solid #ddd;
        border-radius: .375rem;
        transition: transform 0.3s;
        cursor: pointer; /* Pointer cursor for the card */
    }

    .category-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .category-card-link {
        text-decoration: none;
        color: inherit;
    }

    .button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: rgb(255, 255, 69);
        border: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
        cursor: pointer;
        transition-duration: .3s;
        overflow: hidden;
        position: relative;
    }

    .button:hover {
        background-color: rgb(204, 204, 0);
        width: 140px;
        border-radius: 50px;
    }

    .button .svgIcon {
        width: 20px;
        transition-duration: .3s;
    }

    .button:hover .svgIcon {
        width: 30px;
    }

    .button::before {
        content: "Edit";
        color: white;
        font-size: 12px;
        position: absolute;
        top: -20px;
        transition: font-size 0.3s, opacity 0.3s, transform 0.3s;
    }

    .button:hover::before {
        font-size: 14px;
        opacity: 1;
        transform: translateY(30px);
    }

    .button1 {
        background-color: rgb(239, 77, 77);
    }

    .button1:hover {
        background-color: rgb(255, 0, 0);
    }

    .button1::before {
        content: "Delete";
    }

    .button1:hover::before {
        font-size: 14px;
        opacity: 1;
        transform: translateY(30px);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(function () {
                successMessage.classList.add('fade');
            }, 4000); // 4 segundos
        }
    });
</script>

@endsection
