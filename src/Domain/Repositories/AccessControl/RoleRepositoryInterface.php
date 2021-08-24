<?php

namespace Domain\Repositories\AccessControl;

use Domain\Entities\AccessControl\Role;
use Illuminate\Support\Collection;

interface RoleRepositoryInterface
{
    public function all(): Collection;

    public function find(string $roleId): Role;

    public function assignRolesToUser(string $useId, Collection $roleIds): void;
}
