<?php

namespace Infra\AccessControl\Repositories;

use Domain\Entities\AccessControl\User;
use Infra\AccessControl\DTO\PermissionDTO;
use Illuminate\Support\Collection;
use Domain\Entities\AccessControl\Permission;
use Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function all(): Collection
    {
        return Permission::all()->each(function($permission) {
            return new PermissionDTO($permission->toArray());
        });
    }

    public function findAllByUserId(string $id): Collection
    {
        return User::find($id)->getAllPermissions()->map(function ($permission) {
            return new PermissionDTO($permission->toArray());
        });
    }
}
