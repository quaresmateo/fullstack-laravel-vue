<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $tasks = Task::all();

        $response()->json([
            'data' => $tasks,
            'message' => 'all tasks'
        ]);
    }

    public function show(Request $request, Response $response)
    {
        $task = Task::find($request->id);

        return $response()->json([
            'data' => $task,
            'message' => 'created!'
        ]);
    }

    public function update(Request $request, Response $response)
    {
        $task = Task::find($request->id);

        $task->date = $request->date;
        $task->type = $request->type;
        $task->description = $request->description;
        $task->check = $request->check;

        $task->save();

        $response()->json([
            'data' => $task,
            'message' => 'updated'
        ]);
    }

    public function delete(Request $request, Response $response)
    {
        $task = Task::find($request->id);
        $task->delete();

        $response()->json([
            'message' => 'deleted'
        ]);
    }

    public function store(Request $request, Response $response)
    {
        $task = new Task;

        $task->date = $request->date;
        $task->type = $request->type;
        $task->description = $request->description;
        $task->check = $request->check;

        $task->save();

        return $response()->json([
            'message' => 'created!',
            'status' => '201'
        ]);
    }
}
