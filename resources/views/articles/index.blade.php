@extends('layouts.app-master')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Articles Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('articles.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Image</th>
                <th>Article</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            @if(count($articles) > 0)
            @foreach($articles as $article)
            <tr>
                <td><img src="{{ asset('imagesArticles/'.$article->article_image) }}" width="75" /></td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->price }}</td>
                <td>{{ $article->category->name }}</td>
                <td>
                    <form method="post" action="{{ route('articles.destroy', $article->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">No Data Found</td>
            </tr>
            @endif
        </table>
        {!! $articles->links() !!}
    </div>
</div>

@endsection
