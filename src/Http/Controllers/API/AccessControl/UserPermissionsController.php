<?php

namespace Src\Http\Controllers\API\AccessControl;

use Src\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Src\Http\Resources\PermissionResource;

class UserPermissionsController extends Controller
{
    public function index()
    {
        return PermissionResource::collection(Auth::user()->allPermissions);
    }
}
