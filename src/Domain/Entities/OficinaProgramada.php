<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OficinaProgramada extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oficina_programada';

    protected $fillable = [
        'COD_MONITOR_1',
        'COD_MONITOR_2',
        'COD_OFICINA',
        'DAT_INICIO',
        'DAT_TERMINO',
        'DSC_OBSERVACAO',
        'IND_DIA_SEMANA1',
        'IND_DIA_SEMANA2',
        'IND_DIA_SEMANA3',
        'IND_DIA_SEMANA4',
        'IND_DIA_SEMANA5',
        'IND_DIA_SEMANA6',
        'IND_DIA_SEMANA7',
        'IND_LAYOUT_CHAMADA',
        'IND_OCORRENCIA_DIA1',
        'IND_OCORRENCIA_DIA2',
        'IND_OCORRENCIA_DIA3',
        'IND_OCORRENCIA_DIA4',
        'IND_OCORRENCIA_DIA5',
        'IND_PARTICIPA_CAMPANHA_NATAL',
        'IND_SITUACAO',
        'NUM_DURACAO_PRESENCA',
        'NUM_VAGAS'
    ];
}
