<?php

namespace Http\Controllers\AccessControl;

use Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Http\Resources\PermissionResource;
use Application\UseCases\AccessControl\GetAllPermissions;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PermissionsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        Gate::authorize('admin');

        // TODO add pagination
        $permissions = new GetAllPermissions();

        return PermissionResource::collection($permissions());
    }
}
