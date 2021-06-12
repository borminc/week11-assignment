@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit post</h1>
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required type="text" class="form-control" id="title" name="title" value={{$post->title}}>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea required class="form-control" id="body" name="body"> {{$post->body}} </textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select required class="form-control" name="category_id" value={{$post->category->id}}>
                @foreach($categories as $category)
                    @if ($post->category->id == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Save </button>
    </form>
</div>
@endsection
