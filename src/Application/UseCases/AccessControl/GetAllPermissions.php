<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Support\Collection;
use Infra\AccessControl\DTO\PermissionDTO;
use Domain\Repositories\AccessControl\PermissionRepositoryInterface;

class GetAllPermissions
{
    protected $permissionRepository;

    public function __construct()
    {
        $this->permissionRepository = app()->make(PermissionRepositoryInterface::class);
    }

    public function __invoke(): Collection
    {
        return $this->permissionRepository->all();
    }
}
