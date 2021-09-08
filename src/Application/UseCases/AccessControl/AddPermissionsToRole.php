<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Support\Collection;
use Exceptions\InvalidPermissionException;
use Domain\Entities\AccessControl\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Domain\Repositories\AccessControl\RoleRepositoryInterface;

class AddPermissionsToRole
{
    protected $roleRepository;

    public function __construct()
    {
        $this->roleRepository = app()->make(RoleRepositoryInterface::class);
    }

    public function __invoke(string $roleId, Collection $permissionNames): void
    {
        $permissionNames->each(function ($permissionName) {
            try {
                Permission::findByName($permissionName);
            } catch (PermissionDoesNotExist) {
                throw new InvalidPermissionException;
            }
        });

        $this->roleRepository->addPermissionsToRole($roleId, $permissionNames);
    }
}
