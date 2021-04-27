<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>
    
@if($posts->count())
    @foreach($posts as $post)

    <h2>{{$post->title}}</h2>
    <p>{{ str_limit($post->content,150) }}</p>
    @endforeach

    {{$posts->render()}}
@endif

</body>
</html>




