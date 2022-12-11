<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('lists', ListsController::class)->only([
    'index', 'show', 'store', 'update', 'destroy'
]);

Route::resource('tasks', TaskController::class)->only([
    'index', 'show', 'store', 'update', 'destroy'
]);

Route::resource('users', UserController::class)->only([
    'index', 'show', 'store', 'update', 'destroy'
]);
