<?php

namespace Src\Infra\AccessControl\Repositories;

use Src\Infra\AccessControl\DTO\UserDTO;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Collection;
use Src\Domain\Repositories\AccessControl\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(): Collection
    {
        return User::all()->each(function($user) {
            return new UserDTO($user->toArray());
        });
    }

    public function find(string $id): UserDTO
    {
        return new UserDTO(
            User::find($id)->toArray()
        );
    }
}
