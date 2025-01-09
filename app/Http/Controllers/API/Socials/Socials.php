<?php

namespace App\Http\Controllers\API\Socials;

use App\Http\Controllers\Controller;
use App\Models\Gradient;
use App\Models\Palette_Bootstrap;
use App\Models\Palette_Flat;
use App\Models\Palette_Material;
use App\Models\Palette_Tailwind;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Socials extends Controller
{
    public static function index(Request $request): JsonResponse
    {
        if ($request->input('search')) {
            $request->validate(['search' => 'sometimes|nullable|regex:/[a-zA-Z0-9 ]+/']);

            $data = \App\Models\Socials::query()
                ->where('name', 'like', '%' . urldecode($request->input('search')) . '%')
                ->orderBy('name')
                ->get();
        } else {
            $data = \App\Models\Socials::query()
                ->orderBy('name')
                ->get();
        }

        return response()->json(['data' => $data]);
    }
}
