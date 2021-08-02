<?php

namespace Application\AccessControl\UseCases;

use Domain\AccessControl\User;

class GetUserById
{
    public function handle(int $id) {
        return User::find($id);
    }
}
