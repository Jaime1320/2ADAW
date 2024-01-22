<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar ticket</title>
</head>
<body>
    <form action="{{ route('tickets.update', ['ticket' => $ticket->id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Fecha del ticket</label>
        <input type="date" name="date" value="{{ $ticket->date }}">
        <label>Precio</label>
        <input type="text" name="price" value="{{ $ticket->price }}">
        <label>Nombre del tren</label>
        <select name="train_id">
            <option selected hidden value="{{ $ticket->train->id }}">{{ $ticket->train->name }}
            </option>
            @foreach ($trains as $train)
                    <option value="{{ $train->id }}">{{ $train->name }}
                    </option>
            @endforeach
            </select>
            <select name="ticket_type_id">
                <option selected hidden value="{{ $ticket->ticket_type->id }}">{{ $ticket->ticket_type->type }}
                </option>
                @foreach ($ticketTypes as $ticketType)
                    <option value="{{ $ticketType->id }}">{{ $ticketType->type }}
                    </option>
                @endforeach
            </select>
        <input type="submit" value="Editar">
    </form>
</body>
</html>