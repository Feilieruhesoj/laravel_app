<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Ensures the content fills the entire viewport */
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        .btn:hover {
            background-color: #ddd;
            color: #333;
        }

    </style>
</head>

<body>
    <h1>Hello, Laravel!</h1>
    <a href="/greet" class="btn">Greetings?</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Go to Tasks</a>
</body>

</html>