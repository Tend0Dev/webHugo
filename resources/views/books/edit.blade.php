<form action="{{ route('books.update', $books->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $books->title }}" required>

    <label for=" isbn">ISB</label>
    <input type="text" id="isbn" name="isbn" value="{{ $books->isbn }}" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>{{ $books->description }}</textarea>

    <button type="submit">Update</button>
</form>
