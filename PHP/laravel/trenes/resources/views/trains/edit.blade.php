<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tren</title>
</head>
<body>
    <form action="{{ route('trains.update', ['train' => $train->id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre del tren</label>
        <input type="text" name="name" value="{{ $train->name }}">
        <label>Pasajeros</label>
        <input type="text" name="passengers" value="{{ $train->passengers }}">
        <label>Año</label>
        <input type="text" name="year" value="{{ $train->year }}">
        <select name="train_type_id">
            <option selected hidden value="{{ $train->train_type->id }}">{{ $train->train_type->type }}
            </option>
            @foreach ($trainsTypes as $trainType)
                <option value="{{ $trainType->id }}">{{ $trainType->type }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Editar">
    </form>
</body>
</html>