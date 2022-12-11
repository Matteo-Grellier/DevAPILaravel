<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index($slug)
    {
        return view('tasks.index', [
        'task' => Task::where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function show()
    {
        return view('tasks.show', [
        'tasks' => Task::all(),
        ]);
    }

    public function update(Request $request, $slug)
    {
        $task = Task::where('slug', $slug)->first();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->slug = $request->slug;
        $task->done = $request->done;
        $task->save();
        return response()->json(['success' => 'Task updated successfully.']);
    }

    public function destroy($slug)
    {
        $task = Task::where('slug', $slug)->first();
        $task->delete();
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->slug = $request->slug;
        $task->done = $request->done;
        $task->save();
        return response()->json($task);
    }
}
