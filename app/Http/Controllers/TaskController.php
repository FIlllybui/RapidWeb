<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskCategory;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasksByCategory = Task::with('taskCategory')
            ->get()
            ->groupBy(function($task) {
                return $task->taskCategory ? $task->taskCategory->name : 'Uncategorized';
            });
        return view('tasks.index', compact('tasksByCategory'));
    }
    public function create()
    {
        $categories = TaskCategory::all();
        return view('tasks.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'completed' => 'required|boolean',
            'category_id' => 'nullable|exists:task_categories,id',
        ]);

        Task::create($validatedData);
        return redirect()->route('tasks.index');
    }
    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index');
    }
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }
}
