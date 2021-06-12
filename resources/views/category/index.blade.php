@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Category</h1>
    
    @can('can-manage-category')
        <a class="" href="{{ route('category.create') }}">Add a new category</a>
    @endcan

    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>

            @can('can-manage-category')
                <th scope="col">Action</th>
            @endcan
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
             <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$category->name}}</td>

                @can('can-manage-category')
                <td class="d-flex">
                    <a class="btn btn-outline-primary mr-2" href="{{ route('category.edit', $category->id) }}">Edit</a>

                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
                @endcan
            </tr>
        @endforeach
       
       
    </tbody>
    </table>
</div>
@endsection
