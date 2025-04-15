<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | Posts</title>
</head>
<body>
    <a href="/posts">Volver a posts</a>

    <h1>
        Título: {{ $post->title }}
    </h1>
    <p>
        <b>Categoría: </b>{{ $post->category }}
    </p>
    
    <p>{{ $post->content }}</p>

    <a href="/posts/{{ $post->id }}/edit">
        Editar post
    </a>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar post
        </button>
    </form>
</body>
</html>