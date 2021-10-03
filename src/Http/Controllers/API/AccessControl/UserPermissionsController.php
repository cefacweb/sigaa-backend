<?php

namespace Http\Controllers\API\AccessControl;

use Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Http\Resources\PermissionResource;

class UserPermissionsController extends Controller
{
    public function index()
    {
        return PermissionResource::collection(Auth::user()->allPermissions);
    }
}
