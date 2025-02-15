<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all(); // Fetch all tasks from the database
        return view('tasks.index', compact('tasks')); // Pass tasks to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create'); // Display the create task form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'is_completed' => 'boolean',
        ]);

        // Create a new task in the database
        Task::create($validatedData);

        // Redirect to the tasks index page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'is_completed' => 'sometimes|boolean', // Ensure it's a boolean if provided
        ]);

        // Set default value for is_completed if not provided
        $validatedData['is_completed'] = $request->has('is_completed') ? $request->input('is_completed') : false;

        // Create a new task in the database
        Task::create($validatedData);

        // Redirect to the tasks index page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id); // Fetch the task by ID
        return view('tasks.edit', compact('task')); // Pass the task to the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'is_completed' => 'sometimes|boolean', // Ensure it's a boolean if provided
        ]);
    
        // Set default value for is_completed if not provided
        $validatedData['is_completed'] = $request->has('is_completed') ? $request->input('is_completed') : false;
    
        // Find the task by ID
        $task = Task::findOrFail($id);
    
        // Update the task with the validated data
        $task->update($validatedData);
    
        // Redirect to the tasks index page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the task by ID
        $task = Task::findOrFail($id);

        // Delete the task
        $task->delete();

        // Redirect to the tasks index page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
