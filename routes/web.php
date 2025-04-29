<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $tasks = Task::all();

    foreach ($tasks as $task) {
        echo "{$task->name} - {$task->person->name} ({$task->person->role->name})<br>";
    }

});
