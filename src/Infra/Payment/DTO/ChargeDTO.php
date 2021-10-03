<?php declare(strict_types=1);

namespace Infra\Payment\DTO;

use Infra\AccessControl\DTO\UserDTO;
use Infra\DTO;

class ChargeDTO extends DTO
{
    public $id;

    public $user_id;

    public $value;

    public $type;

    public $created_at;

    public UserDTO $user;
}
