<?php

namespace Presentation\Http\Controllers\AccessControl;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Application\AccessControl\UseCases\Login;
use Presentation\Http\Controllers\Controller;
use Application\AccessControl\UseCases\Logout;
use Presentation\Http\Requests\AccessControl\LoginRequest;

class SimpleAuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $logged = Login::handle($request['email'], $request['password'], $request);

        if ($logged) {
            return response()->json('', 200);
        }

        return response()->json(['message' => __('auth.failed')], 401);
    }

    public function logout(Request $request): JsonResponse
    {
        Logout::handle($request);

        return response()->json('', 200);
    }
}
