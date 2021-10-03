<?php

namespace Http\Controllers\Admin\AccessControl;

use Http\Controllers\Controller;
use Http\Resources\UserResource;
use Illuminate\Support\Facades\Gate;
use Domain\Entities\AccessControl\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UsersController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return UserResource::collection(User::paginate(10));
    }
}
