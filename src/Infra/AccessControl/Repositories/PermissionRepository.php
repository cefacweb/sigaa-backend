<?php

namespace Src\Infra\AccessControl\Repositories;

use Src\Infra\AccessControl\DTO\PermissionDTO;
use Illuminate\Support\Collection;
use Src\Domain\Entities\AccessControl\Permission;
use Src\Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function all(): Collection
    {
        return Permission::all()->each(function($permission) {
            return new PermissionDTO($permission->toArray());
        });
    }

    public function findByUuid(string $permissionId): PermissionDTO
    {
        return new PermissionDTO(
            Permission::findByUuid($permissionId)->toArray()
        );
    }
}
