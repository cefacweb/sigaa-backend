<?php

namespace Domain\Entities\AccessControl;

use Domain\Entities\Traits\HasUuids;
use Spatie\Permission\Models\Permission as BasePermission;

class Permission extends BasePermission
{
    use HasUuids;
}
