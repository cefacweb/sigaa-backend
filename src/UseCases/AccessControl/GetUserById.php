<?php

namespace UseCases\AccessControl;

use Domain\Entities\AccessControl\User;
use Domain\Repositories\AccessControl\UserRepositoryInterface;

class GetUserById
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = app()->make(UserRepositoryInterface::class);
    }

    // TODO return DTO instead of Model
    public function __invoke(string $userId): User
    {
        return $this->userRepository->find($userId);
    }
}
