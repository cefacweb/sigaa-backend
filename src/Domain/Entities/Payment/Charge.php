<?php

namespace Domain\Entities\Payment;

use Domain\Entities\Traits\HasUuids;
use Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *  schema="charge",
 *  title="Charge",
 * )
 */

class Charge extends Model
{
    use HasUuids;

    /**
     * The value of the charge
     * @var string
     * @OA\Property()
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'value',
        'type',
    ];

    protected static function newFactory()
    {
        return \Database\Factories\ChargeFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
