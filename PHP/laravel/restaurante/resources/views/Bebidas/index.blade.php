<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bebidas</title>
</head>
<body>
    <h1>Estas son mis Bebidas</h1>
    <h2>{{ $mensaje }}</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebidas as $bebida)
            <tr>
                <td>{{$bebida[0]}}</td>
                <td>{{$bebida[1]}}</td>
                <td>{{$bebida[2]}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>