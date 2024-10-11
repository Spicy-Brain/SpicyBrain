<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function index( Request $request ): JsonResponse
    {
        return response()->json(Task::all());
    }
}
