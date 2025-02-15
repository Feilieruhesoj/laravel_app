<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcom Page</title>
</head>
<body>
    <h1>Hello, Laravel!</h1>
    <a href="/greet" class="btn">Greetings?</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Go to Tasks</a>
</body>
</html>