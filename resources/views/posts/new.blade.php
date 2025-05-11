<form method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="desc" placeholder="Description" required>
    <textarea name="text" placeholder="Text" required></textarea>
    <input type="datetime-local" name="date" required>
    <button type="submit">Create</button>
</form>