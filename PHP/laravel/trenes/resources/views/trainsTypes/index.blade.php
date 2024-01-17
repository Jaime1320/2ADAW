<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de tren</title>
</head>
<body>
    <a href="{{route('train_types.create')}}">Crear cancion</a>
    <table>
            <thead>
                <tr>
                    <th>Nombre cancion</th>
                    <th>Genero cancion</th>
                    <th>Duracion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($canciones as $cancion)
                    <tr>
                        <td>{{ $cancion->titulo_cancion }}</td>
                        <td>{{ $cancion->genero_cancion }}</td>
                        <td>{{ $cancion->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>