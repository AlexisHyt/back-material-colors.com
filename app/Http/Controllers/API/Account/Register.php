<?php

namespace App\Http\Controllers\API\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class Register extends Controller
{
    public static function register(UserRegistrationRequest $request): JsonResponse
    {
        $data = $request->all();

        User::updateOrCreate([
            'email' => $data['email']
        ], [
            'uid' => str_replace('auth0|', '', $data['sub']),
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'picture' => $data['picture']
        ]);

        return response()->json(['success' => true]);
    }
}
