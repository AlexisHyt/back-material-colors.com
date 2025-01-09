<?php

namespace App\Http\Controllers\API\Palettes;

use App\Http\Controllers\Controller;
use App\Models\Palette_Bootstrap;
use App\Models\Palette_Flat;
use App\Models\Palette_Material;
use App\Models\Palette_Tailwind;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class Palettes extends Controller
{
    public static function indexMaterial(): JsonResponse
    {
        $data = Palette_Material::all();
        $title = 'Material';
        $colors = self::buildObject($data);

        return response()->json(['colors' => $colors, 'title' => $title]);
    }


    public static function indexTailwind(): JsonResponse
    {
        $data = Palette_Tailwind::all();
        $title = 'Tailwind';
        $colors = self::buildObject($data);

        return response()->json(['colors' => $colors, 'title' => $title]);
    }


    public static function indexFlat(): JsonResponse
    {
        $data = Palette_Flat::all();
        $title = 'Flat';
        $colors = self::buildObject($data);

        return response()->json(['colors' => $colors, 'title' => $title]);
    }


    public static function indexBootstrap(): JsonResponse
    {
        $data = Palette_Bootstrap::all();
        $title = 'Boostrap';
        $colors = self::buildObject($data);

        return response()->json(['colors' => $colors, 'title' => $title]);
    }


    private static function buildObject($colors)
    {
        $obj = [];
        foreach ($colors as $color) {
            $tmp = [
                "name" => $color->name,
                "colors" => []
            ];
            unset($color->id);
            unset($color->name);
            foreach ($color->getAttributes() as $attr => $c) {
                $tmp["colors"][] = [
                    "tint" => Str::substr($attr, 1, strlen($attr)),
                    "color" => $c
                ];
            }
            $obj[] = $tmp;
        }

        return $obj;
    }
}
