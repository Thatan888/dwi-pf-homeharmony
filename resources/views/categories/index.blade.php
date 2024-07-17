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
            <div class="col col-md-6"><b>Furniture Categories Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @if(count($categories) > 0)
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <form method="post" action="{{ route('categories.destroy', $category->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex flex-column">
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary btn-sm mb-1">View</a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
    </div>
</div>

@endsection
