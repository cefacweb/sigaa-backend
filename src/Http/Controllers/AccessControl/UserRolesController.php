<?php

namespace Http\Controllers\AccessControl;

use Http\Controllers\Controller;
use Http\Resources\RoleResource;
use Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\User;
use Application\UseCases\AccessControl\AddUserToRoles;
use Http\Requests\AccessControl\StoreUsersPermissionRequest;
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
        $useCase($user, collect([$validatedRequest['role_name']]));

        return (new UserResource($user))->response()->setStatusCode(201);
    }

    public function destroy(User $user, Role $role): JsonResponse
    {
        $user->removeRole($role);

        return response()->json(['data' => ['id' => $role->id]]);
    }
}
