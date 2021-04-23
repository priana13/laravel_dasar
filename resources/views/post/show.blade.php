
<h2>{{ $post->title }}</h2>

<p>{{ $post->content }}</p>
<p>{{$post->created_at->diffForHumans()}}</p>