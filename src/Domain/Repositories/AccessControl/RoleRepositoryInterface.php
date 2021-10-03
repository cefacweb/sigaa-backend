<?php

namespace Domain\Repositories\AccessControl;

use Illuminate\Support\Collection;

interface RoleRepositoryInterface
{
    public function all(): Collection;

    public function addRolesToUser(string $useId, Collection $roleIds): void;

    public function addPermissionsToRole(string $roleId, Collection $permissionIds): void;
}
