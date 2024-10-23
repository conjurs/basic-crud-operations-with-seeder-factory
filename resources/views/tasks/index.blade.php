<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div>
        <canvas id="taskChart" width="400" height="200"></canvas>
    </div>

    <a href="{{ route('tasks.create') }}">add</a>
    
    <div>
        <h2>tasks</h2>
        <ul>
            @foreach($tasks as $task)
                <li>
                    {{ $task->title }} - {{ $task->status }}
                    <a href="{{ route('tasks.show', $task) }}">view</a>
                    <a href="{{ route('tasks.edit', $task) }}">edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <script>
        var ctx = document.getElementById('taskChart').getContext('2d');
        var taskCounts = @json($taskCounts);
        
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: taskCounts.map(item => item.status),
                datasets: [{
                    label: 'number of tasks',
                    data: taskCounts.map(item => item.count),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)'
                    ]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
