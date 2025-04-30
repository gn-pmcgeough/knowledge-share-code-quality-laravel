<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

/**
 * base install, nothing more
 */
Route::get('/', function() {
    $tasks = Task::query()
        ->get();

    return view('base', [
        'tasks' => $tasks,
    ]);
});


/**
 * barryvdh/laravel-debugbar
 * laravel/telescope
 * app service provider
 */
Route::get('/1-logs', function() {
    $tasks = Task::query()
        ->get();

    return view('l1', [
        'tasks' => $tasks,
    ]);
});
