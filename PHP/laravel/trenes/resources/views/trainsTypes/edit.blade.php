<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar tipo de tren</title>
</head>
<body>
    <form action="{{ route('trainsTypes.update', ['trainsType' => $trainsType->id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Tipo de tren</label>
        <input type="text" name="type" value="{{ $trainsType->type }}">
        <input type="submit" value="Editar">
    </form>
</body>
</html>