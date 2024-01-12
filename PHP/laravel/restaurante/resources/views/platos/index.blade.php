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

    <p>
        <a href="{{route('platos.create')}}">Crear Plato</a>
    </p>
    <table border="1px">
        <thead>
            <tr>
                <th>Plato</th>
                <th>Precio</th>
                <th>Racion</th>
                <th>Ver Plato</th>
                <th>Editar Plato</th>
                <th>Borrar Plato</th>
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
                <td>
                    <form action="{{route('platos.show',['plato' => $plato ->id])}}" method="get">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="{{route('platos.edit',['plato' => $plato ->id])}}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{route('platos.destroy',['plato' => $plato ->id])}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>