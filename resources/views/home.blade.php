<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Home</title>
</head>
<body>
    <h2>Titolo: {{ $title }}</h2>
    <h3>Regista: {{ $director }}</h3>
    <p>Genere: {{ $genre }}</p>
    <p>Anno: {{ $year }}</p>

    <a href="{{ url('/series') }}">Per le serie TV clicca QUI</a>
</body>
</html>