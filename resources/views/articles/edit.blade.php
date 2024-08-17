@extends('layouts.app-master')

@section('content')

<div class="card">
    <div class="card-header">Edit article</div>
    <div class="card-body">
        <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Article Name</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Article Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" rows="3">{{ $article->description }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Item Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" name="price" class="form-control" value="{{ $article->price }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Category:</label>
                <div class="col-sm-10">
                    <input type="hidden" id="category_id" name="category_id" value="{{ $article->category->id }}">
                    <input id="autocomplet_category" type="text" class="form-control"
                        placeholder="Search for a category..." value="{{ $article->category->name }}">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Article Image</label>
                <div class="col-sm-10">
                    <input type="file" name="article_image" />
                    <br />
                    @if($article->article_image)
                        <img src="{{ asset('imagesArticles/' . $article->article_image) }}" width="100" class="img-thumbnail" />
                    @else
                        <p>No image available</p>
                    @endif
                    <input type="hidden" name="hidden_article_image" value="{{ $article->article_image }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Registration Date:</label>
                <div class="col-sm-10">
                    <input type="date" name="registered_at" class="form-control" value="{{ old('registered_at', $article->registered_at ? $article->registered_at->format('Y-m-d') : '') }}" />
                </div>
            </div>  
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Status:</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control">
                        <option value="1" {{ old('status', $article->status) == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $article->status) == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $article->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>

@endsection
