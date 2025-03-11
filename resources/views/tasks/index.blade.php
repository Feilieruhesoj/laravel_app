<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks List</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mt-5">
            <h1 class="text-2xl font-bold mb-4">Tasks</h1>
            @if (session('success'))
                <div class="bg-green-200 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-3 inline-block">Create New Task</a>
            <ul class="list-none p-0">
                @foreach ($tasks as $task)
                    <li class="bg-gray-100 border border-gray-300 rounded-md p-4 mb-2 flex justify-between items-center hover:bg-gray-200">
                        <div>
                            <a href="{{ route('tasks.show', $task->id) }}" class="text-lg font-semibold">{{ $task->title }}</a>
                            <p class="text-gray-600 mb-0">{{ $task->description }}</p>
                            <p class="mb-0">
                                <strong>Status:</strong>
                                <span class="font-bold {{ $task->is_completed ? 'text-green-500' : 'text-red-500' }}">
                                    {{ $task->is_completed ? 'Completed' : 'Not Completed' }}
                                </span>
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
</body>
</html>