<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/lists/all', [ListsController::class, 'show'])->name('lists.show');
Route::get('/lists/{slug}', [ListsController::class, 'index'])->name('lists.index');
// Route::delete('/lists/{slug}', [ListsController::class, 'destroy'])->name('lists.destroy');
// Route::put('/lists/{slug}', [ListsController::class, 'update'])->name('lists.update');

Route::get('/tasks/all', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{slug}', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/users/all', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}', [UserController::class, 'index'])->name('users.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
