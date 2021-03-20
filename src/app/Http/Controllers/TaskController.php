<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request, Response $response)
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
