@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Author Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $author->name }}</h5>
        </div>
    </div>

    <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">Back to Authors</a>
</div>
@endsection
