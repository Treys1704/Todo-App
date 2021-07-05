<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', [TodoController::class, 'index']);

Route::get('todos/{todo}', [TodoController::class, 'show']);

Route::get('create-todo', [TodoController::class, 'create']);

Route::post('store-todos', [TodoController::class, 'store']);

Route::get('todos/{todo}/edit', [TodoController::class, 'edit']);

Route::post('todos/{todo}/update-todos', [TodoController::class, 'update']);

Route::get('todos/{todo}/delete', [TodoController::class, 'delete']);

Route::get('todos/{todo}/completed', [TodoController::class, 'completed']);



Route::get('about', function () {
    return view('about');
});

/* Route::get('todos', function () {
    return view('todos.index');
}); */

