<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TasksController extends Controller {

    public function welcome() {
        return view('tasks.welcome');
    }

    public function index() {
        $tasks = Task::all();
        return view(
            'tasks.index', 
            ["tasks" => $tasks]
        );
    }

    public function create() {
        return view('tasks.create');
    }

    public function save(Request $request) {
        $task = Task::create([
            "title" => $request->input("title"),
            "description" => $request->input("description")
        ]);
        
        return redirect('/tasks');
    }
    
}
