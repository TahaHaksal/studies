@foreach ($posts as $post)
    <a href="/ex11/single-post/{{$post->id}}">{{$post->title}}</a>
    <p>{{$post->body}}</p>
    <a href="/ex11/delete-post/{{$post->id}}">Delete!</a>
    <br>
@endforeach
