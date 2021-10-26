<?php declare(strict_types=1);

namespace Src\Infra\AccessControl\DTO;

use Src\Infra\DTO;

class RoleDTO extends DTO
{
    public $id;

    public $name;

    public $description;
}
