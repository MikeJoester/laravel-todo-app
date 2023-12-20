<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function tasklist()
    {
        // Retrieve all categories with their tasks
        $categoriesWithTasks = Category::with('todos')->get();

        //Loop through categories and access tasks for each category
        // foreach ($categoriesWithTasks as $category) {
        //     $categoryName = $category->category_name;
        //     $tasks = $category->tasks; // Access tasks for the current category

        //     // Do something with $categoryName and $tasks
        // }
        return view('category.task-list', [
            'categoriesWithTasks'=>$categoriesWithTasks
        ]);
    }

    public function store(Request $request, $categoryId)
    {
        // Validate the request data
        $request->validate([
            'task_name' => 'required|string',
            'status' => 'required|in:open,done',
            'priority' => 'required|in:high,medium,low',
        ]);

        // Find the category by ID
        $category = Category::findOrFail($categoryId);

        // Create a new task linked with the category
        $task = $category->tasks()->create([
            'task_name' => $request->input('task_name'),
            'status' => $request->input('status'),
            'priority' => $request->input('priority'),
        ]);

        return response()->json($task, 201);
    }
}
