@extends('layouts.app-master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    @if ($error == 'The name field is required.')
                        <li>The title field is required.</li>
                    @elseif($error == 'The description field is required.')
                        <li>The description field is required.</li>
                    @elseif($error == 'The price field is required.')
                        <li>The price field is required.</li>
                    @else
                        <li>{{ $error }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card" style="background-color: #bfe9bf">
        <div class="card-header" style="background-color: #BFE9BF;">
            <div class="row">
                <div class="col col-md-6 fs-1"><b>Articles Details</b></div>
                <div class="col col-md-6 text-end">
                    <a href="{{ route('articles.index') }}" class="custom-link">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('imagesArticles/' . $article->article_image) }}"
                            class="img-fluid img-thumbnail" />
                    </div>
                    <div class="col-md-9">
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Article Name:</strong></div>
                            <div class="col-md-8">{{ $article->title }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Description:</strong></div>
                            <div class="col-md-8">{{ $article->description }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Price:</strong></div>
                            <div class="col-md-8">${{ $article->price }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Category:</strong></div>
                            <div class="col-md-8">{{ $article->category->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Registration Date:</strong></div>
                            <div class="col-md-8">
                                {{ $article->registered_at ? $article->registered_at->format('Y-m-d') : 'N/A' }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Status:</strong></div>
                            <div class="col-md-8">{{ $article->status ? 'Active' : 'Inactive' }}</div>
                        </div>
                    </div>
                </div>
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
    </style>
@endsection
