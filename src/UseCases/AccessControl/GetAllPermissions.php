<?php

namespace UseCases\AccessControl;

use Illuminate\Support\Collection;
use Domain\Entities\AccessControl\Permission;

class GetAllPermissions
{
    // TODO return DTO instead of Model
    public function __invoke(): Collection
    {
        $permissions = collect();
        $iterator = app()->tagged('permissions')->getIterator();

        while ($iterator->valid()) {
            $permissions->push(
                Permission::findByName($iterator->current()->getName())
            );
            $iterator->next();
        }

        return $permissions;
    }
}
