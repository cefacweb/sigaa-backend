<?php

namespace Domain\Repositories\AccessControl;

use Illuminate\Support\Collection;

interface PermissionRepositoryInterface
{
    public function all();

    public function findAllByUserId(string $id): Collection;
}
