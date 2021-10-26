<?php

namespace Src\Domain\Repositories\AccessControl;

use Illuminate\Support\Collection;
use Src\Infra\AccessControl\DTO\UserDTO;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function find(string $id): UserDTO;
}
