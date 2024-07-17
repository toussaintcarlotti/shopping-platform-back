<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!auth()->guard('client')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        auth()->guard('client')->user()->tokens()->delete();
        $token = auth()->guard('client')->user()->createToken('auth-token')->plainTextToken;

        return response()->json(['token' => $token]);
    }
}
