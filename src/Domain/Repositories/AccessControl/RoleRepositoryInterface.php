<?php

namespace Domain\Repositories\AccessControl;

use Illuminate\Support\Collection;
use Infra\AccessControl\DTO\RoleDTO;

interface RoleRepositoryInterface
{
    public function all(): Collection;

    public function find(string $roleId): RoleDTO;

    public function addRolesToUser(string $useId, Collection $roleIds): void;

    public function addPermissionsToRole(string $roleId, Collection $permissionIds): void;
}
