@foreach($posts as $post)

<h2>{{$post->title}}</h2>
<p>{{ $post->content,100 }}</p>
@endforeach

{{$posts}}