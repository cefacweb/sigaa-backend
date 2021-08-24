<?php declare(strict_types=1);

namespace Infra\AccessControl\DTO;

use Infra\DTO;

class RoleDTO extends DTO
{
    public $id;

    public $name;

    public $description;
}
