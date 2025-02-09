@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Latest Blog Posts</h1>

    @if(session()->has('posts') && count(session('posts')) > 0)
        <div class="list-group">
            @foreach(session('posts') as $post)
                <a href="{{ route('post.show', $post['id']) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $post['title'] }}</h5>
                    <p class="mb-1">{{ $post['description'] }}</p>
                </a>
            @endforeach
        </div>
    @else
        <p class="text-center text-muted">No blog posts available.</p>
    @endif

    <div class="text-center mt-3">
        <a href="{{ route('post.create') }}" class="btn btn-primary">Create New Post</a>
    </div>
</div>
@endsection
