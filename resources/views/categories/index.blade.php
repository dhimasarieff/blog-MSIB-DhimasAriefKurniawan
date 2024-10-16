@foreach ($categories as $category)
    <p>{{ $category->name }}</p>
    <a href="{{ route('categories.show', $category) }}">View</a>
    <a href="{{ route('categories.edit', $category) }}">Edit</a>
@endforeach
