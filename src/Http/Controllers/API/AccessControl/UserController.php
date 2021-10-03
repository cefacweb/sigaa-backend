<?php

namespace Http\Controllers\API\AccessControl;

use Http\Controllers\Controller;
use Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return new UserResource(Auth::user());
    }
}
