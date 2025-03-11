<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-200 flex flex-col items-center justify-center min-h-screen text-center">
    <h1 class="text-3xl text-gray-800 mb-4">Hello, Laravel!</h1>
    <a href="/greet" class="inline-block py-2 px-4 m-2 text-lg no-underline rounded transition-colors duration-300 hover:bg-gray-300 hover:text-gray-800">Greetings?</a>
    <a href="{{ route('tasks.index') }}" class="inline-block py-2 px-4 m-2 text-lg no-underline rounded transition-colors duration-300 bg-blue-500 text-white hover:bg-blue-700">Go to Tasks</a>
</body>

</html>