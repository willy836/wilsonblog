@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Create Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="title">
    </div>
    <div class="form-group mb-3">
        <textarea name="body" rows="5" class="form-control" placeholder="Body"></textarea>
    </div>
    <div class="form-group mb-3">
        <input type="number" name="category_id" class="form-control" placeholder="Category ID">
    </div>
    <div class="form-group mb-3">
        <input type="number" name="user_id" class="form-control" placeholder="User ID">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="image" class="form-control" placeholder="Image URL">
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

@endsection