<?php

namespace Infra\AccessControl\Repositories;

use Domain\Entities\AccessControl\User;
use Infra\AccessControl\DTO\PermissionDTO;
use Illuminate\Database\Eloquent\Collection;
use Domain\Entities\AccessControl\Permission;
use Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function all(): Collection
    {
        $permissionsDTO = collect();

        return Permission::all()->each(function($permission) use ($permissionsDTO) {
            $permissionsDTO->push(new PermissionDTO($permission->toArray()));
        });
    }

    public function findAllByUserId(string $id = ""): Collection
    {
        $permissionsDTO = collect();

        return User::find($id)->getAllPermissions()->each(function ($permission) use ($permissionsDTO) {
            $permissionsDTO->push(new PermissionDTO($permission->toArray()));
        });
    }
}
