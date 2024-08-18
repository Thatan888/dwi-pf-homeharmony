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
            <div class="col col-md-6"><b>Add Furniture Category</b></div>
            <div class="col col-md-6">
                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm float-end">All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Imagen en la parte izquierda -->
            <div class="col-md-6">
                <img src="{{ url('images/sofa.png') }}" alt="Category Image" class="img-fluid">
            </div>
            
            <!-- Formulario en la parte derecha -->
            <div class="col-md-6">
                <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name:</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Category Description:</label>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Add" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
