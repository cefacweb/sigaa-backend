<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rancho extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rancho';

    protected $fillable = [
        'COD_ENTREGADOR1',
        'COD_ENTREGADOR2',
        'COD_PERFIL',
        'COD_PESSOA',
        'COD_RESPONSAVEL',
        'DAT_ENTREGA',
        'DAT_PREVISTA',
        'IND_RECEBIMENTO',
        'IND_TIPO_RANCHO',
        'QTD_TOTAL'
    ];
}
