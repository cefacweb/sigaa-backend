<?php

namespace Http\Controllers\AccessControl;

use Domain\Entities\AccessControl\User;
use Http\Controllers\Controller;
use Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UsersController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return UserResource::collection(User::paginate(10));
    }
}
