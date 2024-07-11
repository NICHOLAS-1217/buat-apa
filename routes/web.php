<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'welcome']);   

Route::get('/tasks', [TasksController::class, 'index']);

Route::get('/tasks/create', [TasksController::class, 'create']);

Route::post('/tasks', [TasksController::class, 'save']);

Route::patch('/tasks/{id}', [TasksController::class, 'complete']);

Route::delete('/tasks/{id}', [TasksController::class, 'delete']);