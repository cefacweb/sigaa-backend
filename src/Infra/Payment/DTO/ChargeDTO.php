<?php declare(strict_types=1);

namespace Src\Infra\Payment\DTO;

use Src\Infra\AccessControl\DTO\UserDTO;
use Src\Infra\DTO;

class ChargeDTO extends DTO
{
    public $id;

    public $user_id;

    public $value;

    public $type;

    public $created_at;

    public UserDTO $user;
}
