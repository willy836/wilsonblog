@extends('layouts.app')

@section('content')
<h1 class="text-center my-4">Welcome to my blog</h1>
@if (count($posts) > 0)
    <div class="row">
        @foreach ($posts as $index => $post)
            <div class="col-lg-{{ $index === 0 ? '12' : '4' }}">
                <article class="card mb-3">
                    <div class="row">
                        <div class="col-md-{{ $index === 0 ? '5' : '12' }}">
                            <img src="{{ $post->image }}" alt="Post Image" class="img-fluid">
                        </div>
                        <div class="col-md-{{ $index === 0 ? '7' : '12' }}">
                            <div class="card-body">
                                <h4>{{ $post->title }}</h4>
                                <p>
                                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}/posts">{{ $post->category->name }}</a>
                                </p>     
                                <p>{{ Str::limit($post->body, 200, '...') }}</p>
                                <a href="{{ route('posts.show', $post->id) }}">See Full Post</a>
                            </div>
                        </div>
                    </div>
                </article> 
            </div>
        @endforeach
    </div>
@else
    <p>There are no posts. Add your first post.</p>
@endif
@endsection

