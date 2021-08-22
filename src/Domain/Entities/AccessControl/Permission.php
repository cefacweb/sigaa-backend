<?php

namespace Domain\Entities\AccessControl;

use Domain\Entities\Traits\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as BasePermission;

class Permission extends BasePermission
{
    use HasFactory, HasUuids;

    protected static function newFactory()
    {
        return \Database\Factories\PermissionFactory::new();
    }
}
