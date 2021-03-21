<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $tasks = Task::all();

        return response()->json([
            'data' => $tasks,
            'message' => 'all tasks'
        ]);
    }

    public function show(Request $request, Response $response)
    {
        $task = Task::find($request->id);

        return response()->json([
            'data' => $task,
            'message' => 'created!'
        ]);
    }

    public function update(Request $request, Response $response, $id)
    {
        $task = Task::find($id);

        $task->date = $request->input('date', $task->date);
        $task->type = $request->input('type', $task->type);
        $task->description = $request->input('description', $task->description);
        $task->check = $request->input('check', $task->check);

        $task->save();

        return response()->json([
            'data' => $task,
            'message' => 'updated'
        ]);
    }

    public function destroy(Request $request, Response $response)
    {
        $task = Task::find($request->id);
        $task->delete();

        return response()->json([
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

        return response()->json([
            'message' => 'created!',
            'status' => '201'
        ]);
    }
}
