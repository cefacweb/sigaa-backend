<?php

namespace Http\Controllers\Admin\AccessControl;

use Http\Controllers\Controller;
use Http\Resources\PermissionResource;
use Application\UseCases\AccessControl\GetAllPermissions;
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
