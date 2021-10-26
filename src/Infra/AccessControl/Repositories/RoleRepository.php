<?php

namespace Src\Infra\AccessControl\Repositories;

use Src\Domain\Entities\AccessControl\Permission;
use Illuminate\Support\Collection;
use Src\Infra\AccessControl\DTO\RoleDTO;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\User;
use Src\Domain\Repositories\AccessControl\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function all(): Collection
    {
        return Role::all()->each(function($role) {
            return new RoleDTO($role->toArray());
        });
    }

    public function addRolesToUser(string $userId, Collection $roleIds): void
    {
        $roles = $roleIds->map(function ($roleId) {
            return Role::findByUuid($roleId)->name;
        });

        User::find($userId)->assignRole($roles->toArray());
    }

    public function addPermissionsToRole(string $roleId, Collection $permissionIds): void
    {
        $permissions = $permissionIds->map(function ($permissionId) {
            return Permission::findByUuid($permissionId)->name;
        });

        Role::find($roleId)->syncPermissions($permissions->toArray());
    }
}
