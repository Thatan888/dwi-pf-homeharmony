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

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Add Article</b></div>
            <div class="col col-md-6">
                <a href="{{ route('articles.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Article Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Article Description:</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Article Price:</label>
                <div class="col-sm-10">
                    <input type="float" name="price" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Category:</label>
                <div class="col-sm-10">
                    <input type="hidden" id="category_id" name="category_id">
                    <input id="autocomplet_category" type="text" class="form-control"
                        placeholder="Search for a category...">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Article Image:</label>
                <div class="col-sm-10">
                    <input type="file" name="article_image" />
                </div>
            </div>

            <!-- Campo para fecha de registro -->
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Registration Date:</label>
                <div class="col-sm-10">
                    <input type="date" name="registration_date" class="form-control" />
                </div>
            </div>

            <!-- Campo para estatus -->
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Status:</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
