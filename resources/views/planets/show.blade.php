
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }}</title>
</head>
<body>

    <h1>{{ $name }}</h1>
    <p>{{ $description }}</p>

    <a href="{{ route('planets.index') }}">Back to All Planets</a>

</body>
</html>
