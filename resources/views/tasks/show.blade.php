<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
</head>
<body>
    <h1>details</h1>
    
    <div>
        {{ $task->title }}
        <p>description: {{ $task->description ?: 'no description' }}</p>
        <p>status: {{ ucfirst($task->status) }}</p>
        <p>due date: {{ $task->due_date ? $task->due_date->format('Y-m-d') : 'no due date' }}</p>
        <a href="{{ route('tasks.edit', $task) }}">edit</a>
        <a href="{{ route('tasks.index') }}">back</a>
    </div>
</body>
</html>
