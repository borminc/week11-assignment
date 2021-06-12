@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Category</h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value={{$category->name}}>
        </div>
        <button type="submit" class="btn btn-primary"> Save </button>
    </form>
</div>
@endsection
