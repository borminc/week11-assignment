@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{$post->title}}</h1>
    <h6>by {{$post->user->name}}</h6>
    <small><i>{{$post->category->name}}</i></small>
    <p>{{$post->body}}</p>
    
</div>
@endsection
