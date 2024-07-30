<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para crear VideoJuegos</title>
</head>
<body>
    <h1>Formulario para crear VideoJuegos</h1>
    <p><a href="{{ route('games') }}">Listar Todos Los Juegos</a></p>
    <form action="{{ route('crearVideojuego') }}" method="POSt">

        @csrf

        <input type="text" placeholder="Nombre del VideoJuego" name="nombre">
        @error('nombre')
            {{ $message }}

        @enderror
        <select name="categoria_id" id="">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
