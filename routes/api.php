<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// =======================================
//
//  Palettes
//
// =======================================
Route::get('/palette/material', [
    'as' => 'material',
    'uses' => '\App\Http\Controllers\API\Palettes\Palettes@indexMaterial'
]);
Route::get('/palette/tailwind', [
    'as' => 'tailwind',
    'uses' => '\App\Http\Controllers\API\Palettes\Palettes@indexTailwind'
]);
Route::get('/palette/flat', [
    'as' => 'flat',
    'uses' => '\App\Http\Controllers\API\Palettes\Palettes@indexFlat'
]);
Route::get('/palette/bootstrap', [
    'as' => 'bootstrap',
    'uses' => '\App\Http\Controllers\API\Palettes\Palettes@indexBootstrap'
]);


// =======================================
//
//  Gradients
//
// =======================================
Route::get('/gradients', [
    'as' => 'gradients',
    'uses' => '\App\Http\Controllers\API\Gradients\Gradients@index'
]);
Route::get('/gradient/{gradient}', [
    'as' => 'gradient.show',
    'uses' => '\App\Http\Controllers\API\Gradients\Gradients@show'
]);


// =======================================
//
//  Social
//
// =======================================
Route::get('/socials', [
    'as' => 'socials.index',
    'uses' => '\App\Http\Controllers\API\Socials\Socials@index'
]);


// =======================================
//
//  Custom Palettes
//
// =======================================
Route::get('/customs', [
    'as' => 'customs.index',
    'uses' => '\App\Http\Controllers\API\Customs\Customs@index'
]);
Route::get('/custom/{customPalette}', [
    'as' => 'customs.index',
    'uses' => '\App\Http\Controllers\API\Customs\Customs@show'
]);


// =======================================
//
//  Account
//
// =======================================
Route::post('/account/register', [
    'as' => 'account.register',
    'uses' => '\App\Http\Controllers\API\Account\Register@register'
]);


// =======================================
//
//  Generators
//
// =======================================
Route::get('/generators/palette', [
    'as' => 'generators.palette',
    'uses' => '\App\Http\Controllers\API\Generators\Palette@index'
]);
