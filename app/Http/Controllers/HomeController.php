<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $tasks = Task::query()
            ->get();

        return view('home', [
            'tasks' => $tasks,
        ]);
    }
}
