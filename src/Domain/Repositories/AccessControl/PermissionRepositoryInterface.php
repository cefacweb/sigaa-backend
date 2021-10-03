<?php

namespace Domain\Repositories\AccessControl;

use Infra\AccessControl\DTO\PermissionDTO;

interface PermissionRepositoryInterface
{
    public function all();

    public function findByUuid(string $id): PermissionDTO;
}
