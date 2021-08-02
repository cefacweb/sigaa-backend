<?php

namespace Presentation\Http\Controllers\User;

use Service\User\Resources\UserResource;
use App\Http\Controllers\Controller;
use Application\User\GetAllUsers;

class UserController extends Controller
{
    public function index() {
        $getAllUsers = new GetAllUsers();

        return UserResource::collection($getAllUsers->handle());
    }

    public function show(User $user) {
        $getAllUsers = new GetAllUsers();

        return UserResource::collection($getAllUsers->handle());
    }

    public function update(User $user, ) {
        $getAllUsers = new GetAllUsers();

        return UserResource::collection($getAllUsers->handle());
    }
}
