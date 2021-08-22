<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaEspera extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lista_espera';

    protected $fillable = [
        'COD_ATENDENTE',
        'COD_PERFIL',
        'COD_PESSOA',
        'DAT_ENTRADA',
        'DSC_OBSERVACAO',
        'IND_BENEFICIO',
        'IND_SITUACAO',
        'NUM_ORDEM'
    ];
}
