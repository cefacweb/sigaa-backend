<?php

namespace Domain\Repositories\AccessControl;

use Illuminate\Database\Eloquent\Collection;

interface PermissionRepositoryInterface
{
    public function findAllByUserId(string $id = ""): Collection;
}
