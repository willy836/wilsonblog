@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">{{ $category->name }} <span class="blog">Blogs</span></h2>

@foreach ($posts as $post)
<article class="article-blog pt-3">
    <h4>{{ $post->title }}</h4>
    <p>{{ $post->body }}</p>
</article>
@endforeach

@endsection