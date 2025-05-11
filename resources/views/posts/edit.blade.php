<form method="POST">
    @csrf
    <input type="text" name="title" value="{{ $post->title }}" required>
    <input type="text" name="desc" value="{{ $post->desc }}" required>
    <textarea name="text" required>{{ $post->text }}</textarea>
    <input type="datetime-local" name="date" value="{{ $post->date->format('Y-m-d\TH:i') }}" required>
    <button type="submit" name="submit">Save</button>
</form>