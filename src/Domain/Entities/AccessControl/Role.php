<?php

namespace Src\Domain\Entities\AccessControl;

use Src\Domain\Entities\Traits\HasUuids;
use Src\Exceptions\InvalidRoleException;
use Spatie\Permission\Models\Role as BaseRole;
use Spatie\Permission\Contracts\Role as RoleContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends BaseRole
{
    use HasFactory, HasUuids;

    public static function findByUuid(string $id): RoleContract
    {
        $role = static::where('id', $id)->first();

        if (! $role) {
            throw new InvalidRoleException;
        }

        return $role;
    }

    protected static function newFactory()
    {
        return \Database\Factories\RoleFactory::new();
    }
}
