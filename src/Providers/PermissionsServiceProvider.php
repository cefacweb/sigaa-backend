<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;
use UseCases\AccessControl\Permissions\CanListUsers;
use UseCases\AccessControl\Permissions\CanViewDashboard;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        'can-view-dashboard' => CanViewDashboard::class,
        'can-list-users' => CanListUsers::class
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->tag(array_keys($this->bindings), 'permissions');
    }
}
