<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TaskController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');