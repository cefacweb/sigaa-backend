<?php

namespace Src\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        \Src\Domain\Repositories\AccessControl\UserRepositoryInterface::class => \Src\Infra\AccessControl\Repositories\UserRepository::class,
        \Src\Domain\Repositories\AccessControl\RoleRepositoryInterface::class => \Src\Infra\AccessControl\Repositories\RoleRepository::class,
        \Src\Domain\Repositories\AccessControl\PermissionRepositoryInterface::class => \Src\Infra\AccessControl\Repositories\PermissionRepository::class,

        \Src\Domain\Repositories\Payment\ChargeRepositoryInterface::class => \Src\Infra\Payment\Repositories\ChargeRepository::class

    ];

    public function register()
    {
        $this->app->bind(\Src\Domain\Repositories\AccessControl\LoginRepositoryInterface::class, function () {
            return \Illuminate\Support\Facades\Auth::guard('web');
        });
    }
}
