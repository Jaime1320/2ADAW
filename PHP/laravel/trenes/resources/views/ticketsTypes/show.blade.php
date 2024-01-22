<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Ticket</title>
</head>
<body>
    <table border="2px solid black">
        <thead>
            <tr>
                <th>Tipo de ticket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $ticketType->type }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>