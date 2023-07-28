@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Create Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <input type="text" name="category_id" class="form-control" placeholder="Category">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="title">
    </div>
    <div class="form-group mb-3">
        <textarea name="body" rows="5" class="form-control" placeholder="Body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

@endsection