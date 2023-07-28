@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Update Post</h2>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group mb-3">
        <input type="text" name="category_id" class="form-control" value="{{ $post->category->name }}">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
    </div>
    <div class="form-group mb-3">
        <textarea name="body" rows="5" class="form-control">{{ $post->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
</form>

@endsection