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
					<textarea type="text" name="description" class="form-control" rows="3">{{ $article->description }}</textarea>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Item Price</label>
				<div class="col-sm-10">
					<input type="float" name="price" class="form-control" value="{{ $article->price }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Article Category</label>
				<div class="col-sm-10">
					<select name="category_id" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}" @if($category->id == $article->category_id) selected @endif>{{ $category->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Article Image</label>
				<div class="col-sm-10">
					<input type="file" name="article_image" />
					<br />
					<img src="{{ asset('imagesArticles/' . $article->article_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_article_image" value="{{ $article->article_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $article->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>

@endsection('content')
