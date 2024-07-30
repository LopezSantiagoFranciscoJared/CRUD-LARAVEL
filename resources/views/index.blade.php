<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vista llamada desde el Controlador</h1>
    <p><a href="{{ route('gamesCreate') }}">Nuevo VideoJuego</a></p>
    <h2>Lista de juegos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREACIÓN</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
            <tr>
                <th>{{ $game->id}}</th>
                <th> <a href="{{ route('viewGame',$game->id) }}">{{ $game->nombre }}</a></th>
                <th>{{ $game->categoria_id }}</th>
                <th>{{ $game->created_at }}</th>
                <th>
                    @if ($game->activo)
                    <span style="color: green">ACTIVO</span>
                    @else
                    <span style="color: red">INACTIVO</span>
                    @endif
                </th>
                <th>
                    <a href="{{ route('deleteGame',$game->id) }}">Eliminar</a>
                </th>
            </tr>

            @empty
            <tr>
                <th>Sin VideoJuegos</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>