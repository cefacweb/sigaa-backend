<?php

namespace Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        \Domain\Repositories\AccessControl\LoginRepositoryInterface::class => Auth::class,
        \Domain\Repositories\AccessControl\UserRepositoryInterface::class => \Infra\AccessControl\Repositories\UserRepository::class,
        \Domain\Repositories\AccessControl\RoleRepositoryInterface::class => \Infra\AccessControl\Repositories\RoleRepository::class,
        \Domain\Repositories\AccessControl\PermissionRepositoryInterface::class => \Infra\AccessControl\Repositories\PermissionRepository::class
    ];
}
