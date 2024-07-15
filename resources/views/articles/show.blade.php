@extends('layouts.app-master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        @if($error =='The name field is required.')
        <li>The title field is required.</li>
        @elseif($error =='The description field is required.')
        <li>The description field is required.</li>
        @elseif($error =='The price field is required.')
        <li>The price field is required.</li>
        @else
        <li>{{ $error }}</li>
        @endif

    @endforeach
    </ul>
</div>

@endif


<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Article Details</b></div>
            <div class="col col-md-6">
                <div class="col col-md-6">
                    <a href="{{ route('articles.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Article Name</b></label>
            <div class="col-sm-10">
                {{ $article->title }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Article Description</b></label>
            <div class="col-sm-10">
                {{ $article->description }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Article Price</b></label>
            <div class="col-sm-10">
                {{ $article->price }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Category</b></label>
            <div class="col-sm-10">
                {{ $article->category->name }}
            </div>
        </div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Aticle Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('imagesArticles/' .  $article->article_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
    </div>
</div>

@endsection('content')
