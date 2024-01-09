<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta</title>
</head>
<body>
    <h1>Esta es la carta</h1>
    <table>
        <thead>
            <tr>
                <th>Plato</th>
                <th>Precio</th>
                <th>Racion</th>
            </tr>
        </thead>
        <tbody>
            {{-- <?php
                foreach ($platos as $plato) {
                    list($nombre , $precio , $racion) = $plato;
                    ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $precio ?></td>
                <td><?php echo $racion ?></td>
            </tr>
            <?php
            }
            ?> --}}
            @foreach ($platos as $plato)
            <tr>
                <td>{{$plato[0]}}</td>
                <td>{{$plato[1]}}</td>
                <td>{{$plato[2]}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
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