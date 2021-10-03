<?php

namespace Application\UseCases\Payment;

use DateTime;
use Domain\Repositories\Payment\ChargeRepositoryInterface;
use Domain\Repositories\AccessControl\UserRepositoryInterface;
use Infra\Payment\DTO\ChargeDTO;

class ChargeUser
{
    protected $userRepository;
    protected $chargeRepository;

    public function __construct()
    {
        $this->userRepository = app()->make(UserRepositoryInterface::class);
        $this->chargeRepository = app()->make(ChargeRepositoryInterface::class);
    }

    public function __invoke(string $userId, float $value, string $type): ChargeDTO
    {
        return $this->chargeRepository->createChargeToUser($userId, $value, $type, new DateTime('NOW'));
    }
}
