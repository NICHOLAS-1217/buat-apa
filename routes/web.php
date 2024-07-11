<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "TaskController@index");

Route::get('/tasks', "TaskController@index");

Route::get('/tasks/create', "TaskController@create");