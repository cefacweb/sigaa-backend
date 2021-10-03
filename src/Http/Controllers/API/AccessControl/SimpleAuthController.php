<?php

namespace Http\Controllers\API\AccessControl;

use Illuminate\Http\Request;
use Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Application\UseCases\AccessControl\Login;
use Http\Requests\AccessControl\LoginRequest;
use Application\UseCases\AccessControl\Logout;

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
