<?php

namespace Application\AccessControl\UseCases;

use Domain\AccessControl\User;

class GetUserById
{
    public static function handle(int $id): User
    {
        return User::find($id);
    }
}
