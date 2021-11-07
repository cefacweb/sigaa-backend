<?php

namespace Src\Domain\Entities\AccessControl;

use Laravel\Sanctum\HasApiTokens;
use Src\Domain\Entities\Payment\Charge;
use Src\Domain\Entities\Traits\HasUuids;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'name';
    }

    protected static function newFactory()
    {
        return \Database\Factories\UserFactory::new();
    }

    public function getAllPermissionsAttribute()
    {
        return $this->getAllPermissions();
    }

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }
}
