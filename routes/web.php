<?php

use App\Http\Controllers\TasksController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'welcome']);   

Route::get('/tasks', [TasksController::class, 'index']);

Route::get('/tasks/create', [TasksController::class, 'create']);

Route::post('/tasks', [TasksController::class, 'save']);

Route::patch('/tasks/{id}', [TasksController::class, 'complete']);

Route::delete('/tasks/{id}', [TasksController::class, 'delete']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register_user', [AuthController::class, 'register_user'])->name("register_user");

Route::get('/login_user', [AuthController::class, 'login_user'])->name("login_user");

Route::get('/profile', [AuthController::class, 'profile']);

Route::get('/logout', [AuthController::class, 'logout']);