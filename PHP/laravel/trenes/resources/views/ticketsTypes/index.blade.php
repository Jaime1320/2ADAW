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
    <table>
            <thead>
                <tr>
                    <th>Tipo de ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ticketTypes as $tickettype)
                    <tr>
                        <td>{{ $tickettype->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>