@extends('layouts.app-master')

@section('content')

<div class="card">
    <div class="card-header" style="background-color: #BFE9BF;">
<div class="row">
        <div class="col col-md-6 fs-1"><b>Edit Furniture Category</b></div>
        <div class="col col-md-6 text-end">
            <a href="{{ route('categories.index') }}" class="custom-link">Back</a>
        </div>
    </div>
    </div>
    
    <div class="card-body">
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ $category->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Category Description</label>
                <textarea class="form-control form-control-lg" id="description" name="description" rows="4" required>{{ $category->description }}</textarea>
            </div>

            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $category->id }}">
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
</div>

<style>
    .card {
        border: 1px solid #ddd;
        border-radius: .375rem;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s;
    }

    .card-header {
        background-color: #BFE9BF;
        color: #333;
        font-weight: bold;
        padding: 1rem;
    }

    .card-body {
        padding: 1.5rem;
    }

    .btn-primary {
        background-color: #3B5D50;
        border-color: #3B5D50;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #2e4a41;
        border-color: #2e4a41;
    }

    .form-control-lg {
        font-size: 1.25rem;
        padding: .75rem 1.25rem;
        border-radius: .375rem;
    }

    .text-center {
        text-align: center;
    }

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
