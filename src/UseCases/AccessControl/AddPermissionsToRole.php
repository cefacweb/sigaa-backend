<?php

namespace UseCases\AccessControl;

use Domain\Repositories\AccessControl\RoleRepository;
use Illuminate\Support\Collection;
use Exceptions\InvalidPermissionException;
use Illuminate\Contracts\Container\BindingResolutionException;

class AddPermissionsToRole
{
    protected $roleRepository;

    public function __construct()
    {
        $this->roleRepository = new RoleRepository;
    }

    // TODO return DTO instead of Model
    public function __invoke(string $roleId, Collection $permissions): void
    {
        $role = $this->roleRepository->find($roleId);

        $permissions->each(function ($permissionName) {
            try {
                app()->make($permissionName);
            } catch (BindingResolutionException) {
                throw new InvalidPermissionException;
            }
        });

        $role->syncPermissions($permissions);
    }
}
