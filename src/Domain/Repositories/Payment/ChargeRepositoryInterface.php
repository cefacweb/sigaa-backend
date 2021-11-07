<?php

namespace Src\Domain\Repositories\Payment;

use DateTime;
use Src\Infra\Payment\DTO\ChargeDTO;

interface ChargeRepositoryInterface
{
    public function createChargeToUser(string $userId, float $value, string $type, DateTime $datetime): ChargeDTO;
}
