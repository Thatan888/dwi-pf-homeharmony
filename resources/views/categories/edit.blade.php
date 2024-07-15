@extends('layouts.app-master')

@section('content')

<div class="card">
    <div class="card-header">Edit Furniture Category</div>
    <div class="card-body">
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Category Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $category->description }}</textarea>
            </div>

            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $category->id }}">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
