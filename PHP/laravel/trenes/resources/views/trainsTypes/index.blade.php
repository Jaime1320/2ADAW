<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de tren</title>
</head>
<body>
    <a href="{{route('trainsTypes.create')}}">Crear tipo de tren</a>
    <table>
            <thead>
                <tr>
                    <th>Tipo de tren</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainTypes as $trainType)
                    <tr>
                        <td>{{ $trainType->type }}</td>
                        <td><form method="get" action="{{ route('trainsTypes.show', ['trainsType' => $trainType->id]) }}">
                            <input type="submit" value="Ver">
                        </form>
                        </td>
                        <td>
                            <form action="{{ route('trainsTypes.edit', ['trainsType' => $trainType->id]) }}">
                            <input type="submit" value="Editar">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('trainsTypes.destroy', ['trainsType' => $trainType->id]) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>