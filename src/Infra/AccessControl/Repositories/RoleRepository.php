<?php

namespace Infra\AccessControl\Repositories;

use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\User;
use Illuminate\Support\Collection;
use Domain\Repositories\AccessControl\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function all(): Collection
    {
        return Role::all();
    }

    public function find(string $roleId): Role
    {
        return Role::findByUuid($roleId);
    }

    public function assignRolesToUser(string $userId, Collection $roleIds): void
    {
        $roles = $roleIds->map(function ($roleId) {
            return Role::findByUuid($roleId)->name;
        });

        User::find($userId)->assignRole($roles->toArray());
    }
}
