@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Author:</strong> {{ $post->author->name }}</p>
            <p><strong>Category:</strong> {{ $post->category->name }}</p>
            <p><strong>Content:</strong></p>
            <p>{{ $post->content }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection