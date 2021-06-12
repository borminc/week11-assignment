@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Category</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary"> Add </button>
    </form>
</div>
@endsection
