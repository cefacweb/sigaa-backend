<?php

namespace UseCases\AccessControl;

use Illuminate\Support\Collection;
use Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class GetUserPermissions
{
    protected $permissionRepository;

    public function __construct()
    {
        $this->permissionRepository = app()->make(PermissionRepositoryInterface::class);
    }

    // TODO return DTO instead of Model
    public function __invoke(string $userId): Collection
    {
        return $this->permissionRepository->findAllByUserId($userId);
    }
}
