<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TasksController extends Controller {

    public function home() {
        return view('tasks.home');
    }

    public function main() {
        return view('tasks.main');
    }

    public function create() {
        return view('tasks.create');
    }

    public function save(Request $request) {
        return $request -> all();
    }
    
}
