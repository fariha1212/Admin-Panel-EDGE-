@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create New Post</h1>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit Post</button>
    </form>
</div>
@endsection
