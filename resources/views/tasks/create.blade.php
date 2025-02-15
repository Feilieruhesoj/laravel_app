<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Create New Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf <!-- CSRF token for security -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="is_completed" class="form-label">Completed</label>
                <input type="checkbox" id="is_completed" name="is_completed" value="1" {{ old('is_completed') ? 'checked' : '' }}>
            </div>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
</body>
</html>