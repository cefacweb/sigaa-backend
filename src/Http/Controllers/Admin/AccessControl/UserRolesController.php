<?php

namespace Src\Http\Controllers\Admin\AccessControl;

use Src\Http\Controllers\Controller;
use Src\Http\Resources\RoleResource;
use Src\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\User;
use Src\Application\UseCases\AccessControl\AddUserToRoles;
use Src\Http\Requests\AccessControl\StoreUsersPermissionRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserRolesController extends Controller
{
    public function index(User $user): AnonymousResourceCollection
    {
        // TODO add pagination
        return RoleResource::collection($user->roles);
    }

    public function store(User $user, StoreUsersPermissionRequest $request): JsonResponse
    {
        $validatedRequest = $request->validated();

        $useCase = new AddUserToRoles();
        $useCase($user->id, collect([$validatedRequest['role_id']]));

        return (new UserResource($user))->response()->setStatusCode(201);
    }

    public function destroy(User $user, Role $role): JsonResponse
    {
        $user->removeRole($role);

        return response()->json(['data' => ['id' => $role->id]]);
    }
}
