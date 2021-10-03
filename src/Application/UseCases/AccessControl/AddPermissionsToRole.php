<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Support\Collection;
use Exceptions\InvalidPermissionException;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Domain\Repositories\AccessControl\RoleRepositoryInterface;
use Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class AddPermissionsToRole
{
    protected $roleRepository;

    public function __construct()
    {
        $this->permissionRepository = app()->make(PermissionRepositoryInterface::class);
        $this->roleRepository = app()->make(RoleRepositoryInterface::class);
    }

    public function __invoke(string $roleId, Collection $permissionIds): void
    {
        $permissionIds->each(function ($permissionId) {
            try {
                $this->permissionRepository->findByUuid($permissionId);
            } catch (PermissionDoesNotExist) {
                throw new InvalidPermissionException;
            }
        });

        $this->roleRepository->addPermissionsToRole($roleId, $permissionIds);
    }
}
