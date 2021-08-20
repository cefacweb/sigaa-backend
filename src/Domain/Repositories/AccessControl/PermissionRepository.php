<?php

namespace Domain\Repositories\AccessControl;

use Domain\Entities\AccessControl\Permission;
use Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Collection;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function all(): Collection
    {
        return Permission::all();
    }

    public function findAllByUserId(string $id = ""): Collection
    {
        return User::find($id)->getAllPermissions();
    }
}
