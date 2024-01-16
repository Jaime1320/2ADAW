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
    <table border="1px">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Ver bebida</th>
                <th>Editar bebida</th>
                <th>Borrar bebida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebidas as $bebida)
            <tr>
                <td>{{$bebida->nombre}}</td>
                <td>{{$bebida->precio}}</td>
                <td>{{$bebida->tipo}}</td>
                <td>
                    <form action="{{route('bebidas.show',['bebida' => $bebida ->id])}}" method="get">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="{{route('bebidas.edit',['bebida' => $bebida ->id])}}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{route('bebidas.destroy',['bebida' => $bebida ->id])}}" method="post">
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