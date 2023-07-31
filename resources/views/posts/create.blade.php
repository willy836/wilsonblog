@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Create Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
    </div>
    {{-- <div class="form-group mb-3">
        <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" placeholder="Slug">
    </div> --}}
    <div class="form-group mb-3">
        <textarea name="body" rows="5" class="form-control" placeholder="Body">{{ old('body') }}</textarea>
    </div>
    <div class="form-group mb-3">
        <input type="text" name="image" class="form-control" placeholder="Image URL">
    </div>
    <div class="form-group mb-3">
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

@endsection