<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets List</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>