<?php

namespace Domain\Repositories\AccessControl;

use Domain\Entities\AccessControl\Role;
use Illuminate\Database\Eloquent\Collection;

interface RoleRepositoryInterface
{
    public function all(): Collection;

    public function find(string $id = ""): Role;
}
