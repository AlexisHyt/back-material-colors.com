<?php

namespace App\Http\Controllers\API\Gradients;

use App\Http\Controllers\Controller;
use App\Models\Gradient;
use App\Models\Palette_Bootstrap;
use App\Models\Palette_Flat;
use App\Models\Palette_Material;
use App\Models\Palette_Tailwind;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class Gradients extends Controller
{
    public static function index(): JsonResponse
    {
        $data = Gradient::query()
            ->orderBy('gradient_name')
            ->get();

        info('json_encode($data)');
        info(json_encode($data));

        return response()->json(['data' => $data]);
    }

    public static function show(Gradient $gradient): JsonResponse
    {
        return response()->json(['data' => $gradient]);
    }
}
