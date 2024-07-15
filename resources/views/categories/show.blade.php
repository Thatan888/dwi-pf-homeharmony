@extends('layouts.app-master')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
        @if($error == 'The name field is required.')
        <li>The category name field is required.</li>
        @elseif($error == 'The description field is required.')
        <li>The category description field is required.</li>
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
            <div class="col col-md-6"><b>Furniture Category Details</b></div>
            <div class="col col-md-6">
                <div class="col col-md-6">
                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Category Name</b></label>
            <div class="col-sm-10">
                {{ $category->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Category Description</b></label>
            <div class="col-sm-10">
                {{ $category->description }}
            </div>
        </div>
    </div>
</div>

@endsection
