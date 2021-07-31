<?php

namespace Application\User;

use Domain\User\User as User;

class GetUserById
{
    public function handle(int $id) {
        return User::find($id);
    }
}
