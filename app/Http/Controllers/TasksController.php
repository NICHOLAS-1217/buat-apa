<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller {

    public function welcome() {
        return view('tasks.welcome');
    }

    public function index() {
        $tasks = Task::
            orderBy("completed_at")->
            orderBy("id", "DESC")->
            get();
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

    public function complete($id) {
        $task = Task::where("id", $id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/tasks');
    }
    
}
