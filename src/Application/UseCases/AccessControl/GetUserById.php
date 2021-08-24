<?php

namespace Application\UseCases\AccessControl;

use Infra\AccessControl\DTO\UserDTO;
use Domain\Repositories\AccessControl\UserRepositoryInterface;

class GetUserById
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = app()->make(UserRepositoryInterface::class);
    }

    public function __invoke(string $userId): UserDTO
    {
        return $this->userRepository->find($userId);
    }
}
