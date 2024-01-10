<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>platos</title>
</head>
<body>
    <h1>Estos son mis platillos</h1>
    <h2>{{ $mensaje }}</h2>
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
                <td>{{$plato->nombre}}</td>
                <td>{{$plato->precio}}</td>
                <td>{{$plato->tipo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>