<?php

namespace Domain\Repositories\AccessControl;

use Infra\AccessControl\DTO\UserDTO;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function find(string $id = ""): UserDTO;
}
