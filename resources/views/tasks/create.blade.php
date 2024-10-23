<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create task</title>
</head>
<body>
    <h1>create new task</h1>
    
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">title:</label>
            <input id="title" type="text" name="title" required>
        </div>
        <div>
            <label for="description">description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="status">status:</label>
            <select id="status" name="status" required>
                <option value="pending">pending</option>
                <option value="in_progress">in progress</option>
                <option value="completed">completed</option>
            </select>
        </div>
        <div>
            <label for="due_date">due date:</label>
            <input id="due_date" type="date" name="due_date">
        </div>
        <div>
            <button type="submit">create task</button>
            <a href="{{ route('tasks.index') }}">cancel</a>
        </div>
    </form>
</body>
</html>
