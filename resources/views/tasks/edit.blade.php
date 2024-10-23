<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit task</title>
</head>
<body>
    <h1>edit task</h1>
    
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" value="{{ $task->title }}" required>
        </div>
        <div>
            <label for="description">description:</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <label for="status">status:</label>
            <select id="status" name="status" required>
                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>pending</option>
                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>in progress</option>
                <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>completed</option>
            </select>
        </div>
        <div>
            <label for="due_date">due date:</label>
            <input id="due_date" type="date" name="due_date" value="{{ $task->due_date }}">
        </div>
        <div>
            <button type="submit">update</button>
            <a href="{{ route('tasks.index') }}">cancel</a>
        </div>
    </form>
</body>
</html>
