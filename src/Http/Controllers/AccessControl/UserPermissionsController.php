<?php

namespace Http\Controllers\AccessControl;

use Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Http\Resources\PermissionResource;
use Application\UseCases\AccessControl\GetUserPermissions;

class UserPermissionsController extends Controller
{
    public function index()
    {
        $useCase = new GetUserPermissions();
        $result = $useCase(Auth::user()->id);

        return PermissionResource::collection($result);
    }
}
