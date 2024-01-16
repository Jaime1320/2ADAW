<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Plato</title>
</head>
<body>
    <form method="post" action="{{route('platos.update', ['plato'=>$plato->id])}}">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $plato -> nombre}}"><br><br>
        <label>Precio:</label>
        <input type="number" step="0.1" name="precio" value="{{ $plato -> precio}}""><br><br>
        <label>Tipo:</label>
        <select name="tipo">
            <option selected hidden value="{{ $plato->tipo_plato_id}}">{{ $plato -> tipo_plato->tipo}}</option>
            <option value="1">Racion</option>
            <option value="2">Media racion</option>
            <option value="3">Tapa</option>
        </select>
        <br><br>
        <input type="submit" value="Editar plato">
    </form>
</body>
</html>