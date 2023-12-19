<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', [
            'categories'=>$categories
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
