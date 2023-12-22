<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Category;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $categories = Category::where('user_id', $userId)->get();

        return view('category.index', [
            'categories'=>$categories,
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function add(TodoRequest $request)
    {
        if (Auth::check()) {
            Auth::user()->categories()->create([
                'category_name'=>$request->category_name,
            ]);

            $request->session()->flash('alert-success', 'Category created!');

            return to_route('category.index');
        } else {
            return to_route('welcome');
        }
    }

    public function updateCategory(Request $request, $categoryId)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Get the authenticated user's ID
        $userId = Auth::id();

        // Check if the category belongs to the authenticated user
        $category = Category::where('id', $categoryId)
            ->where('user_id', $userId)
            ->firstOrFail();

        // Update category details
        $category->update([
            'category_name' => $request->input('name'),
        ]);

        // Return a response indicating success
        return response()->json(['message' => 'Category updated successfully']);
    }

    public function deleteCategory($categoryId)
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Check if the category belongs to the authenticated user
        $category = Category::where('id', $categoryId)
            ->where('user_id', $userId)
            ->firstOrFail();

        // Delete the category and its associated tasks
        $category->tasks()->delete();
        $category->delete();

        // Return a response indicating success
        return response()->json(['message' => 'Category deleted successfully']);
    }

    public function getCategoryTasks($categoryId)
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Check if the category belongs to the authenticated user
        $category = Category::where('id', $categoryId)
            ->where('user_id', $userId)
            ->firstOrFail();

        // Get all tasks for the specified category
        $tasks = $category->tasks;

        // Return the tasks
        return response()->json(['tasks' => $tasks]);
    }

    public function addTask(Request $request, $categoryId)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Get the authenticated user's ID
        $userId = Auth::id();

        // Check if the category belongs to the authenticated user
        $category = Category::where('id', $categoryId)
            ->where('user_id', $userId)
            ->firstOrFail();

        // Create a new task for the category
        $task = new Todo([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Save the task to the category
        $category->tasks()->save($task);

        // Return a response indicating success
        return response()->json(['message' => 'Task added successfully']);
    }
}
