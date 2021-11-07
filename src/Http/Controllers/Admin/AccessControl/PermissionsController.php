<?php

namespace Src\Http\Controllers\Admin\AccessControl;

use Src\Http\Controllers\Controller;
use Src\Http\Resources\PermissionResource;
use Src\Application\UseCases\AccessControl\GetAllPermissions;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PermissionsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        // TODO add pagination
        $permissions = new GetAllPermissions();

        return PermissionResource::collection($permissions());
    }
}
