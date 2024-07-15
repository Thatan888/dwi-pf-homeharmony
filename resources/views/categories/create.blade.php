@extends('layouts.app-master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)

        @if($error =='The title field is required.')
        <li>The Name field is required.</li>
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
            <div class="col col-md-6"><b>Add furniture category</b></div>
            <div class="col col-md-6">
                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm float-end">All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Category Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Category Description:</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
