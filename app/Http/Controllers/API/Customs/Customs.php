<?php

namespace App\Http\Controllers\API\Customs;

use App\Http\Controllers\Controller;
use App\Models\CustomPalettes;
use Illuminate\Http\JsonResponse;

class Customs extends Controller
{
    public static function index(): JsonResponse
    {
        $data = CustomPalettes::query()
            ->orderBy('name')
            ->get();

        return response()->json(['data' => $data]);
    }

    public static function show(CustomPalettes $customPalette): JsonResponse
    {
        return response()->json(['data' => $customPalette]);
    }
}
