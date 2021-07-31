<?php

namespace Application\User;

use Domain\User\User as User;

class GetAllUsers
{
    public function handle() {
        return User::all();
    }
}
