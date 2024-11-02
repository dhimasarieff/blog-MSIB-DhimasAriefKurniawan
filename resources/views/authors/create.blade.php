@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Author</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Author Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create Author</button>
    </form>
</div>
@endsection
