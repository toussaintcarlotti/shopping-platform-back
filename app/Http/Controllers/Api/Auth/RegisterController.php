<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\Client;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $user = Client::create(array_merge(
            $request->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json($user);
    }
}
