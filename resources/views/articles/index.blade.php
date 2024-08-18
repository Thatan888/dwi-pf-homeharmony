@extends('layouts.app-master')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #BFE9BF;">
                <div class="row">
                    <div class="col col-md-6 fs-1"><b>Articles Data</b></div>
                    <div class="col col-md-6 text-end">
                        <a href="{{ route('articles.create') }}" class="custom-link">Add Item</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    @if (count($articles) > 0)
                        @foreach ($articles as $article)
                            <div class="row border-bottom py-3 article-row" data-id="{{ $article->id }}">
                                <div class="col-md-3 text-center">
                                    <img src="{{ asset('imagesArticles/' . $article->article_image) }}"
                                        class="img-fluid img-thumbnail" style="max-width: 100%; height: auto;" />
                                </div>
                                <div class="col-md-9">
                                    <table class="table">
                                        <tr>
                                            <th>Article:</th>
                                            <td>{{ $article->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Description:</th>
                                            <td>{{ $article->description }}</td>
                                        </tr>
                                        <tr>
                                            <th>Price:</th>
                                            <td>${{ $article->price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Category:</th>
                                            <td>{{ $article->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Registration Date:</th>
                                            <td>{{ $article->registered_at ? $article->registered_at->format('Y-m-d') : 'N/A' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status:</th>
                                            <td>{{ $article->status ? 'Active' : 'Inactive' }}</td>
                                        </tr>
                                    </table>
                                    <div class="d-flex">
                                        <form method="post" action="{{ route('articles.destroy', $article->id) }}"
                                            class="d-inline me-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button1">
                                                <svg viewBox="0 0 448 512" class="svgIcon">
                                                    <path
                                                        d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </form>
                                        <a href="{{ route('articles.edit', $article->id) }}" class="button edit-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M 18 2 L 15.585938 4.4140625 L 19.585938 8.4140625 L 22 6 L 18 2 z M 14.076172 5.9238281 L 3 17 L 3 21 L 7 21 L 18.076172 9.9238281 L 14.076172 5.9238281 z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center">
                            <p>No Data Found</p>
                        </div>
                    @endif
                </div>
                {!! $articles->links() !!}
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
        }

        .custom-link:active {
            box-shadow: 0px 2px 0px #3B5D50;
            position: relative;
            top: 2px;
        }

        .custom-link {
            color: #ecf0f1;
            text-decoration: none;
        }

        .custom-link:hover {
            color: #ecf0f1;
            text-decoration: none;
        }

        .article-row {
            cursor: pointer;
            /* Cambia el cursor a la mano */
            transition: background-color 0.3s;
            /* Suaviza el cambio de color de fondo */
        }

        .article-row:hover {
            background-color: #f8f9fa;
            /* Cambia el color de fondo al pasar el ratón */
        }

        .button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgb(220, 0, 0);
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

        .svgIcon {
            width: 12px;
            transition-duration: .3s;
        }

        .svgIcon path {
            fill: white;
        }

        .button:hover {
            width: 140px;
            border-radius: 50px;
            transition-duration: .3s;
            background-color: rgb(255, 255, 69);
            align-items: center;
        }

        .button:hover .svgIcon {
            width: 50px;
            transition-duration: .3s;
            transform: translateY(60%);
        }

        .button::before {
            position: absolute;
            top: -20px;
            content: "Edit";
            color: white;
            transition-duration: .3s;
            font-size: 2px;
        }

        .button:hover::before {
            font-size: 13px;
            opacity: 1;
            transform: translateY(30px);
            transition-duration: .3s;
        }

        .edit-button {
            background-color: rgb(246, 255, 0);
        }

        .edit-button:hover {
            background-color: rgb(204, 204, 0);
        }

        .button-text {
            display: none;
        }

        .button:hover .button-text {
            display: block;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .button1 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgb(239, 77, 77);
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

        .svgIcon {
            width: 12px;
            transition-duration: .3s;
        }

        .svgIcon path {
            fill: white;
        }

        .button1:hover {
            width: 140px;
            border-radius: 50px;
            transition-duration: .3s;
            background-color: rgb(255, 0, 0);
            align-items: center;
        }

        .button1:hover .svgIcon {
            width: 50px;
            transition-duration: .3s;
            transform: translateY(60%);
        }

        .button1::before {
            position: absolute;
            top: -20px;
            content: "Delete";
            color: white;
            transition-duration: .3s;
            font-size: 2px;
        }

        .button1:hover::before {
            font-size: 13px;
            opacity: 1;
            transform: translateY(30px);
            transition-duration: .3s;
        }

        .edit-button1 {
            background-color: rgb(255, 0, 0);
        }

        .edit-button1:hover {
            background-color: rgb(204, 0, 0);
        }

        .button1-text {
            display: none;
        }

        .button1:hover .button-text {
            display: block;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.article-row').forEach(function(row) {
                row.addEventListener('click', function() {
                    const articleId = this.getAttribute('data-id');
                    window.location.href = "{{ url('articles') }}/" + articleId;
                });
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(function () {
                successMessage.classList.add('fade');
            }, 4000); // 4 segundos
        }
    });
</script>

@endsection
