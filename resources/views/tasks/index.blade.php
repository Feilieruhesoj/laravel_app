<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .task-list {
            list-style: none;
            padding: 0;
        }
        .task-item {
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .task-item:hover {
            background: #e9ecef;
        }
        .task-actions a {
            margin-right: 10px;
        }
        .btn-delete {
            background: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn-delete:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tasks</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3">Create New Task</a>
        <ul class="task-list">
            @foreach ($tasks as $task)
                <li class="task-item">
                    <div>
                        <a href="{{ route('tasks.show', $task->id) }}" class="h5">{{ $task->title }}</a>
                        <p class="mb-0 text-muted">{{ $task->description }}</p>
                    </div>
                    <div class="task-actions">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-delete">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>