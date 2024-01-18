<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear trenes</title>
</head>
<body>
    <form action="{{ route('trains.store') }}" method="post">
        @csrf
        <label>Nombre del tren</label>
        <input type="text" name="name">
        <label>Pasajeros</label>
        <input type="text" name="passengers">
        <label>Año</label>
        <input type="text" name="year">
        <label>Tipo de tren</label>
        <select name="train_type_id">
            @foreach ($train_types as $train_type)
                <option value="{{ $train_type->id }}">{{ $train_type->type }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>

</body>
</html>