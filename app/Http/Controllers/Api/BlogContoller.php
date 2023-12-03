<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogContoller extends Controller
{
    public function __construct(private readonly BlogService $service)
    {
        // ..
    }

    public function index(Request $request): JsonResponse
    {
        return response()->json($this->service->index(), Response::HTTP_OK);
    }
}
