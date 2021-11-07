<?php

namespace Src\Http\Controllers\Admin\AccessControl;

use Src\Http\Controllers\Controller;
use Src\Http\Resources\RoleResource;
use Illuminate\Http\JsonResponse;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\Permission;
use Src\Application\UseCases\AccessControl\AddPermissionsToRole;
use Src\Http\Requests\AccessControl\StoreRolesPermissionRequest;
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
            $role->id,
            collect([$validatedRequest['permission_id']])
        );

        return (new RoleResource($role))->response()->setStatusCode(201);
    }

    public function destroy(Role $role, Permission $permission): JsonResponse
    {
        $role->revokePermissionTo($permission);

        return response()->json(['data' => ['id' => $permission->id]]);
    }
}
