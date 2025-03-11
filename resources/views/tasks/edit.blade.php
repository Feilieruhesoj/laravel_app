<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container mx-auto mt-5">
            <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf <!-- CSRF token for security -->
                @method('PUT') <!-- Use PUT method for updates -->
                <div class="mb-3">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" value="{{ $task->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" rows="3">{{ $task->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="is_completed" class="block text-gray-700 text-sm font-bold mb-2">Completed</label>
                    <input type="checkbox" id="is_completed" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Task</button>
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</a>
            </form>
        </div>
    </body>
    </html>