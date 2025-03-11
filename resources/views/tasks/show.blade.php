<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container mx-auto mt-5">
            <h1 class="text-2xl font-bold mb-4">Task Details</h1>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <h5 class="text-xl font-bold">{{ $task->title }}</h5>
                    <p class="text-gray-700 text-base">{{ $task->description }}</p>
                </div>
                <p class="mb-4">
                    <strong>Status:</strong>
                    @if ($task->is_completed)
                        <span class="text-green-500 font-bold">Completed</span>
                    @else
                        <span class="text-red-500 font-bold">Not Completed</span>
                    @endif
                </p>
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to List</a>
            </div>
        </div>
    </body>
    </html>