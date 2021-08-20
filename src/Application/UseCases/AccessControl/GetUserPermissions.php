<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Support\Collection;
use Application\DTO\AccessControl\PermissionDTO;
use Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class GetUserPermissions
{
    protected $permissionRepository;

    public function __construct()
    {
        $this->permissionRepository = app()->make(PermissionRepositoryInterface::class);
    }

    public function __invoke(string $userId): Collection
    {
        $permissionsDTO = collect();

        $this->permissionRepository->findAllByUserId($userId)->each(function ($permission) use ($permissionsDTO) {
            $permissionsDTO->push(new PermissionDTO($permission->toArray()));
        });

        return $permissionsDTO;
    }
}
