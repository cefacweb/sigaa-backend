<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enxoval extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enxoval';

    protected $fillable = [
        'COD_AGENDADOR',
        'COD_ENTREGADOR',
        'COD_PESSOA',
        'DAT_AGENDA',
        'DAT_ENTREGA',
        'DAT_REGISTRO_GESTACAO',
        'IND_PARCIAL'
    ];
}
