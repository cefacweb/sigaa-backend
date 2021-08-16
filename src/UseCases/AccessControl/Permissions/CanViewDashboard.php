<?php

namespace UseCases\AccessControl\Permissions;

use Illuminate\Support\Str;
use Domain\Entities\AccessControl\Permission;

class CanViewDashboard
{
    public function __construct()
    {
        Permission::firstOrCreate([
            'name' => $this->getName(),
            'guard_name' => 'web',
            'description' => $this->getDescription()
        ]);
    }

    public static function getName(): string
    {
        return Str::kebab((new \ReflectionClass(self::class))->getShortName());
    }

    public static function getDescription(): string
    {
        return 'User can view dashboard';
    }
}
