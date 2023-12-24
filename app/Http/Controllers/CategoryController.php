<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function create()
    {
        $userId = Auth::id();

        $categories = Category::where('user_id', $userId)->get();

        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $userId = Auth::id();

        if (Auth::check()) {
            Auth::user()->categories()->create([
                'category_name'=>$request->category_name,
            ]);

            return redirect()->route('todos.index')->with('alert-success', 'Category created successfully');
        } else {
            return redirect()->route('todos.index');
        }

    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('todos.index')->with('alert-success', 'Category deleted successfully!');
    }
}
