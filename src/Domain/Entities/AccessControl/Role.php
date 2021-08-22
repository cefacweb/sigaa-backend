<?php

namespace Domain\Entities\AccessControl;

use Domain\Entities\Traits\HasUuids;
use Exceptions\InvalidRoleException;
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
            throw InvalidRoleException::class;
        }

        return $role;
    }

    protected static function newFactory()
    {
        return \Database\Factories\RoleFactory::new();
    }
}
