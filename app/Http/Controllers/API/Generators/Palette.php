<?php

namespace App\Http\Controllers\API\Generators;

use App\Http\Controllers\Controller;
use App\Models\Gradient;
use App\Models\Palette_Bootstrap;
use App\Models\Palette_Flat;
use App\Models\Palette_Material;
use App\Models\Palette_Tailwind;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Palette extends Controller
{
    public static function index(): JsonResponse
    {
        $data = Http::get('https://palette.azenox.fr/generate?key=' . env('PALETTE_API_KEY'))
            ->json();

        return response()->json($data);
    }
}
