<?php

namespace Infra\Payment\Repositories;

use DateTime;
use Domain\Entities\Payment\Charge;
use Infra\Payment\DTO\ChargeDTO;
use Domain\Repositories\Payment\ChargeRepositoryInterface;

class ChargeRepository implements ChargeRepositoryInterface
{
    public function createChargeToUser(string $userId, float $value, string $type, DateTime $datetime): ChargeDTO
    {
        $charge = new Charge();
        $charge->user_id = $userId;
        $charge->value = $value;
        $charge->type = $type;
        $charge->created_at = $datetime->format('Y-m-d H:i:s');

        $charge->save();

        return new ChargeDTO(
            $charge->load('user')->toArray()
        );
    }
}
