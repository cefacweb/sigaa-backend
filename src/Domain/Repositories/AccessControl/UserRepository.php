<?php

namespace Domain\Repositories\AccessControl;

use Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Collection;
use Domain\Repositories\AccessControl\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(): Collection
    {
        return User::all();
    }

    public function find(string $id = null): User
    {
        return User::find($id);
    }
}
