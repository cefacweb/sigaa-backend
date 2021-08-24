<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Support\Collection;
use Domain\Repositories\AccessControl\RoleRepositoryInterface;

class AddUserToRoles
{
    protected $roleRepository;

    public function __construct()
    {
        $this->roleRepository = app()->make(RoleRepositoryInterface::class);
    }

    public function __invoke(string $userId, Collection $roleIds): void
    {
        $this->roleRepository->assignRolesToUser($userId, $roleIds);
    }
}
