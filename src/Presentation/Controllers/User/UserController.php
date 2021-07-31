<?php

namespace Presentation\Controllers\User;

use Service\User\Resources\UserResource;
use App\Http\Controllers\Controller;
use Application\User\GetAllUsers;

class UserController extends Controller
{
    public function index() {
        $getAllUsers = new GetAllUsers();

        return UserResource::collection($getAllUsers->handle());
    }
}
