<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Task List</h1>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    {{ $task->name }} - {{ $task->person->name }} ({{ $task->person->role->name }})
                </li>
            @endforeach
        </ul>
    </body>
</html>
