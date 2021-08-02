<?php

namespace Domain\AccessControl;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Permission extends Model
{
    public function roles(): Relation
    {
        return $this->belongsToMany(Role::class);
    }
}
