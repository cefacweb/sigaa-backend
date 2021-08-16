<?php

namespace Http\Controllers\AccessControl;

use Http\Controllers\Controller;
use Http\Resources\PermissionResource;
use UseCases\AccessControl\GetAllPermissions;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PermissionsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        // TODO add pagination
        $useCase = new GetAllPermissions();

        return PermissionResource::collection($useCase());
    }
}
