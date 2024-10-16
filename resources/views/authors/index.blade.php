<h1>Author List</h1>
<a href="{{ route('authors.create') }}">Add New Author</a>

<ul>
    @foreach ($authors as $author)
        <li>
            <a href="{{ route('authors.show', $author) }}">{{ $author->name }}</a>
        </li>
    @endforeach
</ul>
