<?php

namespace Domain\Repositories\AccessControl;

use Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function find(string $id = ""): User;
}
