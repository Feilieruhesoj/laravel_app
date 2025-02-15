<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet', [\App\Http\Controllers\GreetController::class, 'showGreet']);