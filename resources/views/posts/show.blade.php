<x-layouts.app
:title="$post->title"
:meta-description="$post->body">

<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>

<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>