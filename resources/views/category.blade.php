@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">{{ $category->name }} Blogs</h2>

@foreach ($posts as $post)
    <h4>{{ $post->title }}</h4>
    <p>{{ $post->body }}</p>
@endforeach

@endsection