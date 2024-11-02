@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Author</h1>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Author Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Author</button>
    </form>
</div>
@endsection
