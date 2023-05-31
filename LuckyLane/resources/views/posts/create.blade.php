<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts | Adicionar</title>
</head>
<body>
    <h1>Adicionar Post</h1>

    <form action="/posts"  method="POST">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
    
        <label for="name">Titulo</label>
        <input type="text" name="title" id="title">
    
        <label for="name">Usuário</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    
        <label for="name">Categoria</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    
        <button type="submit">Create Post</button>
    </form>
    <a href="/posts">Voltar</a>
</body>
</html>