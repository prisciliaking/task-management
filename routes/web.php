<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

# main page redirect to tasks index
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

# task resource routes
Route::resource('tasks', TaskController::class);

#task complete route
Route::patch('/tasks/{task}/complete', [TaskController::class, 'markComplete'])->name('tasks.complete');
