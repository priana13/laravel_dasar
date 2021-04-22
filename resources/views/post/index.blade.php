@foreach($posts as $post)

<h2>{{$post->title}}</h2>
<p>{{ str_limit($post->content,100) }}</p>
@endforeach

{{$posts}}