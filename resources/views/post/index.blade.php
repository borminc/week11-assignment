@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Post</h1>
    <a class="" href="{{ route('post.create') }}">Add a new post</a>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
             <th scope="col">Body</th>
            <th scope="col">Category</th>
            <th scope="col">User</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
             <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>
                    <a href="{{ route('post.show', $post->id) }}">{{$post->title}} </a>
                </td>
                <td>{{$post->body}}</td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->user->name}}</td>
                
                @can('can-manage-post', $post)
                <td class="d-flex">
                    <a class="btn btn-outline-primary mr-2" href="{{ route('post.edit', $post->id) }}">Edit</a>

                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
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
