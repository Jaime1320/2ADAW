<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver tipo de tren</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tipos de trenes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $trainType->type }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>