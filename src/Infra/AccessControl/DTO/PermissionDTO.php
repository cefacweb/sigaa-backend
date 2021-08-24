<?php declare(strict_types=1);

namespace Infra\AccessControl\DTO;

use Infra\DTO;

class PermissionDTO extends DTO
{
    public $id;

    public $name;

    public $description;
}
