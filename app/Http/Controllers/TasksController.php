<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class TasksController extends Controller {

    public function welcome() {
        return view('tasks.welcome');
    }

    public function index() {
        $data = null;
        if (Session::has("logged_user")) {
            $user_id = Session::get("logged_user");
            $data = User::where("id", $user_id)->first();
            $tasks = Task::where("user_id", $user_id)->
            orderBy("completed_at")->
            orderBy("id", "DESC")->
            get();
            return view(
                'tasks.index', 
                ["tasks" => $tasks],
                compact("data")
            );
        } else {
            return redirect("/login");
        }
    }

    public function create() {
        $data = null;
        if (Session::has("logged_user")) {
            $data = User::where("id", Session::get("logged_user"))->first();
            return view(
                'tasks.create',
                compact("data")
            );
        } else {
            return redirect("/login");
        }
    }

    public function save(Request $request) {
        if (Session::has("logged_user")){
            $user_id = Session::get("logged_user");
            Task::create([
                "user_id" => $user_id,
                "title" => $request->input("title"),
                "description" => $request->input("description")
            ]);
            return redirect('/tasks');
        } else {
            return redirect("/login");
        }
    }

    public function complete($id) {
        $task = Task::where("id", $id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/tasks');
    }

    public function delete($id) {
        $task = Task::where("id", $id)->first();
        $task->delete();
        return redirect('/tasks');
    }
    
}
