
<h2>{{ $post->title }}</h2>

<p>{{ $post->content }}</p>
<p>Publised: {{$post->publised_at->diffForHumans()}}</p>