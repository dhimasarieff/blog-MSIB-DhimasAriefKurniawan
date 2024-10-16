<h1>Add New Author</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit">Save</button>
</form>
