<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dasboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//categories
Route::get('category/index', [TodoController::class, 'index'])->name('category.index');
Route::get('category/create', [TodoController::class, 'create'])->name('category.create');
Route::patch('category/update', [TodoController::class, 'update'])->name('category.update');
Route::post('category/add', [TodoController::class, 'add'])->name('category.add');

//tasks
Route::post('/category/{categoryId}/task', [TodoController::class, 'addTask'])->name('category.add-task');
Route::put('/category/{categoryId}', [TodoController::class, 'updateCategory']);
Route::delete('/category/{categoryId}', [TodoController::class, 'deleteCategory']);
// Route::get('/category/{categoryId}/task', [TodoController::class, 'getCategoryTasks'])->name('category.task-view');

require __DIR__.'/auth.php';
