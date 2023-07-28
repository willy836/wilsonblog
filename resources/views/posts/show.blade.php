@extends('layouts.app')

@section('content')


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
    <article class="row mb-3">
        <div class="col-lg-4">
            
        </div>
        <div class="col-lg-8 bg-gray rounded">
            <div class="row">
                <div class="col-lg-2">
                    <img src="https://i.pravatar.cc/100" class="rounded" alt="">
                </div>
                <div class="col-lg-10">
                    <header>
                        <h4>John Doe</h4>
                        <p>Posted <time>4 months ago</time></p>
                    </header>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel, odio quis assumenda 
                        ipsam rerum repudiandae. Soluta itaque provident maxime?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel, odio quis assumenda 
                        ipsam rerum repudiandae. Soluta itaque provident maxime?
                    </p>
                    
                </div>
            </div>  
        </div>
    </article>
    <article class="row mb-3">
        <div class="col-lg-4">
            
        </div>
        <div class="col-lg-8 bg-gray rounded">
            <div class="row">
                <div class="col-lg-2">
                    <img src="https://i.pravatar.cc/100" class="rounded" alt="">
                </div>
                <div class="col-lg-10">
                    <header>
                        <h4>John Doe</h4>
                        <p>Posted <time>4 months ago</time></p>
                    </header>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel, odio quis assumenda 
                        ipsam rerum repudiandae. Soluta itaque provident maxime?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel, odio quis assumenda 
                        ipsam rerum repudiandae. Soluta itaque provident maxime?
                    </p>
                    
                </div>
            </div>  
        </div>
    </article>
</section>

@endsection