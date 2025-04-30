<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    $tasks = Task::query()
        ->get();

    return view('l1', [
        'tasks' => $tasks,
    ]);
});
