@extends('layouts.app-master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    @if ($error == 'The title field is required.')
                        <li>The title field is required.</li>
                    @elseif($error == 'The description field is required.')
                        <li>The description field is required.</li>
                    @elseif($error == 'The price field is required.')
                        <li>The price field is required.</li>
                    @elseif($error == 'The registration date field is required.')
                        <li>The registration date field is required.</li>
                    @elseif($error == 'The status field is required.')
                        <li>The status field is required.</li>
                    @else
                        <li>{{ $error }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <!-- Tarjeta con el formulario de edición -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #BFE9BF;">
                        <div class="row">
                            <div class="col col-md-6 fs-1"><b>Edit Article</b></div>
                            <div class="col col-md-6 text-end">
                                <a href="{{ route('articles.index') }}" class="custom-link">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label fw-bold">Article Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label fw-bold">Article Description:</label>
                                <div class="col-sm-8">
                                    <textarea name="description" class="form-control" rows="3">{{ $article->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label fw-bold">Item Price:</label>
                                <div class="col-sm-8">
                                    <input type="number" step="0.01" name="price" class="form-control" value="{{ $article->price }}" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label fw-bold">Category:</label>
                                <div class="col-sm-8">
                                    <input type="hidden" id="category_id" name="category_id" value="{{ $article->category->id }}">
                                    <input id="autocomplet_category" type="text" class="form-control"
                                        placeholder="Search for a category..." value="{{ $article->category->name }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label fw-bold">Article Image:</label>
                                <div class="col-sm-8">
                                    <input type="file" name="article_image" />
                                    <input type="hidden" name="hidden_article_image" value="{{ $article->article_image }}" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label fw-bold">Registration Date:</label>
                                <div class="col-sm-8">
                                    <input type="date" name="registered_at" class="form-control" value="{{ old('registered_at', $article->registered_at ? $article->registered_at->format('Y-m-d') : '') }}" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label fw-bold">Status:</label>
                                <div class="col-sm-8">
                                    <select name="status" class="form-control">
                                        <option value="1" {{ old('status', $article->status) == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status', $article->status) == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="hidden_id" value="{{ $article->id }}" />
                                <input type="submit" class="custom-link" value="Update" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Imagen a la derecha -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                @if($article->article_image)
                    <img src="{{ asset('imagesArticles/' . $article->article_image) }}" alt="Article Image" class="img-fluid"
                        style="max-width: 100%; max-height: 500px; height: auto;" />
                @else
                    <p>No image available</p>
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
            padding: 10px 20px; /* Añadido padding horizontal para un botón más grande */
            box-shadow: 0px 6px 0px #578775;
            transition: all 0.1s;
            display: inline-block;
            text-align: center;
            border: none; /* Quita el borde predeterminado del botón */
        }

        .custom-link:active {
            box-shadow: 0px 2px 0px #3B5D50;
            position: relative;
            top: 2px;
        }

        .custom-link:hover {
            color: #ecf0f1;
            text-decoration: none;
            background-color: #2a4d41; /* Cambia el color de fondo al pasar el ratón */
        }
    </style>
@endsection
