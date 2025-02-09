@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if($post)
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['description'] }}</p>
        <a href="{{ route('post.index') }}" class="btn btn-secondary">Back to Posts</a>
    @else
        <p class="text-center text-danger">Post not found.</p>
    @endif
</div>
@endsection
