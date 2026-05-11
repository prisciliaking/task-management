<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Task::orderBy('created_at', 'desc');

        if ($search) {
            $query->where('title', 'LIKE', "%{$search}%");
        }

        // Kelompokkan hasil berdasarkan status
        $tasksGrouped = $query->get()->groupBy('status');

        return view('tasks.index', compact('tasksGrouped'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // set default values for status and category if not provided
        $status = $request->filled('status') ? $request->status : 'on going';
        $category = $request->filled('category') ? $request->category : 'university';

        $request->merge([
            'status' => $status,
            'category' => $category,
        ]);

        // validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => ['required', Rule::in(['on going', 'pending', 'completed'])],
            'due_date' => 'nullable|date',
            'category' => 'required|string|max:255',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //update the task
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => ['required', Rule::in(['on going', 'pending', 'completed'])],
            'due_date' => 'nullable|date',
            'category' => 'required|string|max:255',
        ]);

        // Simpan perubahan ke database
        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        dd($task);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    // Method untuk tombol cepat "Complete"
    public function markComplete(Task $task)
    {
        $task->update(['status' => 'completed']);

        return redirect()->route('tasks.index')->with('success', 'Task marked as completed!');
    }
}
