@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create New Post</a>

    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text"><strong>Author:</strong> {{ $post->author->name }}</p>
                            <p class="card-text"><strong>Category:</strong> {{ $post->category->name }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-block">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-block">Edit</a>
                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal-{{ $post->id }}">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Confirming Deletion -->
                <div class="modal fade" id="deleteModal-{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the post titled "{{ $post->title }}"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Pagination Links -->
    {{ $posts->links() }}
</div>
@endsection
