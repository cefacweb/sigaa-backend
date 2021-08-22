<?php

namespace UseCases\AccessControl;

use Illuminate\Support\Collection;
use Exceptions\InvalidPermissionException;
use Domain\Entities\AccessControl\Permission;
use Domain\Repositories\AccessControl\RoleRepository;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

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
                Permission::findByName($permissionName);
            } catch (PermissionDoesNotExist) {
                throw new InvalidPermissionException;
            }
        });

        $role->syncPermissions($permissions);
    }
}
