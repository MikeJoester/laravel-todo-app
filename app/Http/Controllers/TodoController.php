<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $categories = Category::all();

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
}
