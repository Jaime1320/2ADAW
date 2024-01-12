<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar bebidas</title>
</head>
<body>
    <form method="post" action="{{route('bebidas.update',['bebida' =>$bebida ->id])}}">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $bebida -> nombre}}"><br><br>
        <label>Precio:</label>
        <input type="number" step="0.1" name="precio" value="{{ $bebida -> precio}}"><br><br>
        <label>Tipo:</label>
        <select name="tipo">
            <option selected hidden value="{{ $bebida -> tipo}}">{{ $bebida -> tipo}}</option>
            <option value="Refresco">Refresco</option>
            <option value="Alcohol">Alcohol</option>
        </select>
        <br><br>
        <input type="submit" value="Editar bebida">
    </form>
</body>
</html>