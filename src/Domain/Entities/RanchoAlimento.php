<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RanchoAlimento extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rancho_alimento';

    protected $fillable = [
        'COD_ALIMENTO',
        'COD_PESSOA',
        'DAT_ENTREGA',
        'DAT_PREVISTA',
        'QTD_ALIMENTO'
    ];
}
