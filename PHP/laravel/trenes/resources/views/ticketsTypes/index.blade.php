<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de ticket</title>
</head>
<body>
    <a href="{{route('ticketsTypes.create')}}">Crear tipo de ticket</a>
    <table border="2px solid black">
            <thead>
                <tr>
                    <th>Tipo de ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ticketTypes as $ticketType)
                    <tr>
                        <td>{{ $ticketType->type }}</td>
                        <td><form method="get" action="{{ route('ticketsTypes.show', ['ticketsType' => $ticketType->id]) }}">
                            <input type="submit" value="Ver">
                        </form>
                        </td>
                        <td>
                            <form action="{{ route('ticketsTypes.edit', ['ticketsType' => $ticketType->id]) }}" method="get">
                                <input type="submit" value="Editar">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('ticketsTypes.destroy', ['ticketsType' => $ticketType->id]) }}" method="post">
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