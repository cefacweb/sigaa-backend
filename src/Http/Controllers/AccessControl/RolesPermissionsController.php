<?php

namespace Http\Controllers\AccessControl;

use Http\Controllers\Controller;
use Http\Resources\RoleResource;
use Illuminate\Http\JsonResponse;
use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\Permission;
use Application\UseCases\AccessControl\AddPermissionsToRole;
use Http\Requests\AccessControl\StoreRolesPermissionRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RolesPermissionsController extends Controller
{
    public function index(Role $role): AnonymousResourceCollection
    {
        // TODO add pagination
        return RoleResource::collection($role->permissions);
    }

    public function store(Role $role, StoreRolesPermissionRequest $request, AddPermissionsToRole $useCase): JsonResponse
    {
        $validatedRequest = $request->validated();

        $useCase(
            $role,
            collect([$validatedRequest['permission_name']])
        );

        return (new RoleResource($role))->response()->setStatusCode(201);
    }

    public function destroy(Role $role, Permission $permission): JsonResponse
    {
        $role->revokePermissionTo($permission);

        return response()->json(['data' => ['id' => $permission->id]]);
    }
}
