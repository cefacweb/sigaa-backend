<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Support\Collection;
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
        return $this->permissionRepository->findAllByUserId($userId);
    }
}
