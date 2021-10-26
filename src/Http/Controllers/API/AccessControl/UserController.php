<?php

namespace Src\Http\Controllers\API\AccessControl;

use Src\Http\Controllers\Controller;
use Src\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return (new UserResource(Auth::user()))->response()->setStatusCode(200);
    }
}
