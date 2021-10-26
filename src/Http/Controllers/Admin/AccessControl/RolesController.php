<?php

namespace Src\Http\Controllers\Admin\AccessControl;

use Src\Http\Controllers\Controller;
use Src\Http\Resources\RoleResource;
use Illuminate\Http\JsonResponse;
use Src\Domain\Entities\AccessControl\Role;
use Src\Http\Requests\AccessControl\StoreRolesRequest;
use Src\Http\Requests\AccessControl\UpdateRolesRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RolesController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return RoleResource::collection(Role::paginate(10));
    }

    public function show(Role $role): RoleResource
    {
        return new RoleResource($role);
    }

    public function store(StoreRolesRequest $request): JsonResponse
    {
        $role = Role::create($request->validated());

        return (new RoleResource($role))->response()->setStatusCode(201);
    }

    public function update(Role $role, UpdateRolesRequest $request): RoleResource
    {
        $role->update($request->validated());

        return new RoleResource($role);
    }

    public function destroy(Role $role): JsonResponse
    {
        $role->delete();

        return response()->json(['data' => ['id' => $role->id]]);
    }
}
