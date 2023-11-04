<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/', [TodoListController::class, 'index']);
Route::get('/list', [TodoListController::class, 'index']);
Route::post('/list', [TodoListController::class, 'addTodo']);
Route::put('/list/{id}', [TodoListController::class, 'updateTodo']);
Route::delete('/list/{id}', [TodoListController::class, 'deleteTodo']);
