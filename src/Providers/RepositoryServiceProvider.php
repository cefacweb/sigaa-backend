<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        \Domain\Repositories\AccessControl\UserRepositoryInterface::class => \Domain\Repositories\AccessControl\UserRepository::class,
        \Domain\Repositories\AccessControl\RoleRepositoryInterface::class => \Domain\Repositories\AccessControl\RoleRepository::class,
        \Domain\Repositories\AccessControl\PermissionRepositoryInterface::class => \Domain\Repositories\AccessControl\PermissionRepository::class
    ];
}
