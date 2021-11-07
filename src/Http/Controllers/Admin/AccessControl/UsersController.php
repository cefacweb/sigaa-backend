<?php

namespace Src\Http\Controllers\Admin\AccessControl;

use Src\Http\Controllers\Controller;
use Src\Http\Resources\UserResource;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UsersController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return UserResource::collection(User::paginate(10));
    }
}
