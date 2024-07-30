<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para actualizar VideoJuegos</title>
</head>
<body>
    <h1>Formulario para actualizar VideoJuegos</h1>
    <p><a href="{{ route('games') }}">Listar Todos Los Juegos</a></p>
    <form action="{{ route('updateVideojuego') }}" method="POST">
        @csrf
        <input type="hidden" name="game_id" value="{{ $game->id }}">
        <input type="text" placeholder="Nombre del VideoJuego" name="name_game" value="{{ $game->nombre }}">
        @error('nombre')
            {{ $message }}

        @enderror
        <select name="categoria_id" id="">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" @if($categoria->id == $game->categoria_id) selected @endif>{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

