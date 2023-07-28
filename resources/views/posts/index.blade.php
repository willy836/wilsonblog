@extends('layouts.app')

@section('content')

@include('partials.messages')

<h2 class="text-center my-4">Latest blog posts</h2>
<div class="d-flex justify-content-center">
    <div x-data="{show: false}" class="me-3">
        <button @click="show=!show" @click.away="show=false" class="mb-1 py-1 px-5 border border-muted rounded">Categories</button>
        <div x-show="show" style="display: none;" class="categories-bg py-2 rounded">
            @foreach ($categories as $category)
            <a class="d-block btn px-2" href="/category/{{ $category->slug }}/posts">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <form action="#" method="GET" class="w-30">
        <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Find something">
    </form>
</div>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
@if (count($posts) > 0)
    @foreach ($posts as $post)
       <article class="card mb-3">
        <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}/posts">{{ $post->category->name }}</a>
            </p>     
            <p>{{ Str::limit($post->body, 200, '...') }}</p>
            <a href="{{ route('posts.show', $post->id) }}">See Full Post</a>
        </div>
        </article> 
    @endforeach
@else
    <p>There are no posts. Add your first post.</p>
@endif

@endsection