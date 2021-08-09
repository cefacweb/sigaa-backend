<?php

namespace UseCases\AccessControl;

use Illuminate\Support\Collection;
use Domain\Repositories\AccessControl\RoleRepositoryInterface;
use Domain\Repositories\AccessControl\UserRepositoryInterface;

class AddUserToRoles
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct()
    {
        $this->userRepository = app()->make(UserRepositoryInterface::class);
        $this->roleRepository = app()->make(RoleRepositoryInterface::class);
    }

    // TODO return DTO instead of Model
    public function __invoke(string $userId, Collection $roleIds): void
    {
        $user = $this->userRepository->find($userId);

        $roles = $roleIds->map(function ($roleId) {
            $role = $this->roleRepository->find($roleId);

            return $role->name;
        });

        $user->assignRole($roles->toArray());
    }
}
