<?php

namespace App\Http\Controllers;

use App\Models\type;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index(Response $response)
    {
        $types = Type::all();

        return response()->json([
            'data' => $types,
            'message' => 'all types'
        ]);
    }

    public function store(Request $request, Response $response)
    {
        $type = new Type;

        $type->name = $request->name;

        $type->save();

        return response()->json([
            'message' => 'created!',
            'status' => '201'
        ]);
    }

    public function show(Request $request, Response $response, $id)
    {
        $type = Type::find($id);

        return response()->json([
            'data' => $type,
            'message' => 'created!'
        ]);
    }

    public function update(Request $request, Response $response, $id)
    {
        $type = Type::find($id);

        $type->name = $request->name;

        $type->save();

        return response()->json([
            'data' => $type,
            'message' => 'updated'
        ]);
    }

    public function destroy(Request $request, Response $response, $id)
    {
        $type = Type::find($id);
        $type->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}
