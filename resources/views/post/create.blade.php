@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea required class="form-control" id="body" name="body"> </textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select required class="form-control" name="category_id">
                <option value="">Select one</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Add </button>
    </form>
</div>
@endsection
