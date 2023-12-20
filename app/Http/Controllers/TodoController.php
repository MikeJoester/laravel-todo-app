<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // Retrieve all categories with their tasks
        $categoriesWithTasks = Category::with('todos')->get();

        //Loop through categories and access tasks for each category
        // foreach ($categoriesWithTasks as $category) {
        //     $categoryName = $category->category_name;
        //     $tasks = $category->tasks; // Access tasks for the current category

        //     // Do something with $categoryName and $tasks
        // }

        return view('category.index', [
            'categories'=>$categories,
            'categoriesWithTasks'=>$categoriesWithTasks
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function add(TodoRequest $request)
    {
        Category::create([
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,
        ]);

        $request->session()->flash('alert-success', 'Category created!');

        return to_route('category.index');
    }
}
