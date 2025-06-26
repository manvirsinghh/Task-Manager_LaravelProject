<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index()
{
    $tasks = auth()->user()->tasks()->get()->groupBy('status');
    return view('dashboard', compact('tasks'));
}

public function store(Request $request)
{
    $request->validate(['title' => 'required|string|max:255']);

    auth()->user()->tasks()->create([
        'title' => $request->title
    ]);

    return redirect()->back();
}

public function update(Request $request, $id)
{
    $request->validate(['status' => 'required|in:To Do,In Progress,Done']);

    $task = Task::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
    $task->update(['status' => $request->status]);

    return redirect()->back();
}
}
