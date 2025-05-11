<h1>{{ $post->title }}</h1>
<p>{{ $post->desc }}</p>
<p>{{ $post->text }}</p>
<p>Date: {{ $post->date }}</p>
<a href="{{ route('post.all') }}">Back</a>