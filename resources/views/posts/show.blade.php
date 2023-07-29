@extends('layouts.app')

@section('content')
@include('partials.messages')

<article class="my-5">
    <div class="row">
        <div class="row mb-3">
            <div class="col-lg-4">
                <p></p>
            </div>
            <div class="col-lg-8">
                <div class="d-flex justify-content-between">
                    <div><a href="/posts">Back to Posts</a></div>
                    <div><a href="/category/{{ $post->category->slug }}/posts">{{ $post->category->name }}</a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <img src="{{ $post->image }}" alt="Post Image" class="img-fluid mb-3">
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            </p>
            <p>Published <time>{{ $post->created_at->diffForHumans() }}</time></p>
        </div>
        <div class="col-lg-8">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>
</article>
<section>
    <div class="row mb-3">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
            <form action="/posts/{{ $post->id }}/comments" method="POST">
                @csrf
        
                <header>
                    <h5>Leave a comment</h5>
                </header>
                <div class="mb-2">
                    <textarea name="body" id="comment" rows="3" class="form-control" required></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">POST</button>
                </div>
            </form>
        </div>
    </div>
    
    @foreach ($post->comments as $comment)
    <article class="row mb-3">
        <div class="col-lg-4">
            
        </div>
        <div class="col-lg-8 bg-gray rounded">
            <div class="row ">
                <div class="col-lg-2">
                    <img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" class="rounded" alt="">
                </div>
                <div class="col-lg-10">     
                    <header>
                        <h4>{{ $comment->author->name }}</h4>
                        <p>Posted <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time></p>
                    </header>
                    <p>
                       {{ $comment->body }} 
                    </p>   
                </div>
            </div>  
        </div>
    </article>
    @endforeach
</section>

@endsection