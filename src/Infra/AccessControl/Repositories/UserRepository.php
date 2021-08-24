<?php

namespace Infra\AccessControl\Repositories;

use Infra\AccessControl\DTO\UserDTO;
use Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Collection;
use Domain\Repositories\AccessControl\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(): Collection
    {
        return User::all();
    }

    public function find(string $id = null): UserDTO
    {
        return new UserDTO(
            User::find($id)->toArray()
        );
    }
}
