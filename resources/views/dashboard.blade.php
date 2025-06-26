<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-4">

    <!-- Greeting + Logout -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Hello, {{ auth()->user()->name }}</h2>
      <a href="{{ route('logout') }}" class="btn btn-outline-danger">Logout</a>
    </div>

    <!-- Add Task Form -->
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <form method="POST" action="{{ route('tasks.store') }}" class="d-flex gap-2">
          @csrf
          <input name="title" class="form-control" placeholder="Enter new task" required>
          <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
      </div>
    </div>

    <!-- Task Columns -->
    <div class="row">
      @foreach(['To Do', 'In Progress', 'Done'] as $status)
        <div class="col-md-4 mb-4">
          <div class="card border-{{ $status === 'To Do' ? 'secondary' : ($status === 'In Progress' ? 'warning' : 'success') }}">
            <div class="card-header bg-{{ $status === 'To Do' ? 'secondary' : ($status === 'In Progress' ? 'warning' : 'success') }} text-white">
              <h5 class="mb-0">{{ $status }}</h5>
            </div>
            <div class="card-body">
              @forelse($tasks[$status] ?? [] as $task)
                <div class="mb-3">
                  <p class="mb-1">{{ $task->title }}</p>
                  <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                    @csrf
                    @method('PUT')
                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                      @foreach(['To Do', 'In Progress', 'Done'] as $option)
                        <option {{ $task->status == $option ? 'selected' : '' }}>{{ $option }}</option>
                      @endforeach
                    </select>
                  </form>
                </div>
              @empty
                <p class="text-muted">No tasks</p>
              @endforelse
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
