<?php

namespace Src\Domain\Repositories\AccessControl;

use Src\Infra\AccessControl\DTO\PermissionDTO;

interface PermissionRepositoryInterface
{
    public function all();

    public function findByUuid(string $id): PermissionDTO;
}
