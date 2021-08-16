<?php

namespace Domain\Repositories\AccessControl;

use Domain\Entities\AccessControl\Role;
use Illuminate\Database\Eloquent\Collection;
use Domain\Repositories\AccessControl\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function all(): Collection
    {
        return Role::all();
    }

    public function find(string $id = null): Role
    {
        return Role::findByUuid($id);
    }
}
