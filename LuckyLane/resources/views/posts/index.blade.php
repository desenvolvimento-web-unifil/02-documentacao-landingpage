<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <h1>Lista Posts</h1>
    <a href="/posts/create">Adicionar post</a>

    <ul>

        @foreach ($posts as $post)
                <h2>{{ $post->title }}</h2>
                <p>Por: {{ $users->find($post->user_id)->name }}</p>
                <h5>{{ $categories->find($post->category_id)->name }}</h5>
                <p>{{ $post->title }}</p>
                <a href="/posts/edit/{{ $post->id }}">editar</a>
                <form action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Deletar</button>
                </form>
        @endforeach
    </ul>
    <a href="/..">voltar</a>
</body>

</html>
