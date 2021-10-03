<?php

namespace Domain\Entities\AccessControl;

use Domain\Entities\Traits\HasUuids;
use Exceptions\InvalidPermissionException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Contracts\Permission as PermissionContract;
use Spatie\Permission\Models\Permission as BasePermission;

class Permission extends BasePermission
{
    use HasFactory, HasUuids;

    public static function findByUuid(string $id): PermissionContract
    {
        $permission = static::where('id', $id)->first();

        if (! $permission) {
            throw new InvalidPermissionException;
        }

        return $permission;
    }


    protected static function newFactory()
    {
        return \Database\Factories\PermissionFactory::new();
    }
}
