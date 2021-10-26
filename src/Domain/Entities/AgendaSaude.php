<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaSaude extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agenda_saude';

    protected $filable = [
        'ind_beneficio',
        'cod_pessoa',
        'dat_inicio_tratamento',
        'dat_agenda',
        'cod_agendador',
        'cod_instituicao',
        'dat_atendimento',
        'cod_atendente',
        'dsc_procedimento',
        'cod_perfil',
        'ind_situacao',
        'IND_BENEFICIO',
        'COD_PESSOA',
        'DAT_INICIO_TRATAMENTO',
        'DAT_AGENDA',
        'COD_AGENDADOR',
        'COD_INSTITUICAO',
        'DAT_ATENDIMENTO',
        'COD_ATENDENTE',
        'DSC_PROCEDIMENTO',
        'COD_PERFIL',
        'IND_SITUACAO',
        'IND_BENEFICIO',
        'COD_PESSOA',
        'DAT_INICIO_TRATAMENTO'
    ];
}
