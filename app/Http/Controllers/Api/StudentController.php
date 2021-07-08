<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

    }

    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'auth'=>auth()->guard('api')->user()
        ]);
    }
}
