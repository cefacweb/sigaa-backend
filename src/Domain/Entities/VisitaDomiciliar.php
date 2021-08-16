<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaDomiciliar extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visita_domiciliar';

    protected $fillable = [
        'COD_PESSOA',
        'COD_RESPONSAVEL_PARECER',
        'COD_VISITANTE1',
        'COD_VISITANTE2',
        'DAT_PRIMEIRA_ENTREGA',
        'DAT_ULTIMA_ENTREGA',
        'DAT_VISITA',
        'IND_DURACAO_BENEFICIO',
        'IND_PARECER',
        'IND_PERIODO'
    ];
}
