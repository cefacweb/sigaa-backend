<?php

namespace Http\Controllers\AccessControl;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use UseCases\AccessControl\Login;
use Http\Controllers\Controller;
use UseCases\AccessControl\Logout;
use Http\Requests\AccessControl\LoginRequest;

class SimpleAuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $useCase = new Login();
        $logged = $useCase($request['email'], $request['password'], $request);

        if ($logged) {
            return response()->json('', 200);
        }

        return response()->json(['message' => __('auth.failed')], 401);
    }

    public function logout(Request $request): JsonResponse
    {
        $useCase = new Logout();
        $useCase($request);

        return response()->json('', 200);
    }
}
