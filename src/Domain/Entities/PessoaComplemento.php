<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaComplemento extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pessoa_complemento';

    protected $fillable = [
        'COD_BAIRRO',
        'COD_CIDADE',
        'COD_PERFIL',
        'COD_PESSOA',
        'DAT_SOLICITACAO_VISITA',
        'DSC_ENDERECO',
        'DSC_HISTORICO_ALTERACOES',
        'DSC_OUTROS_BENS',
        'DSC_REFERENCIA',
        'DSC_TEMPO_RESIDENCIA',
        'IND_ESGOTO',
        'IND_ESTADO_CIVIL',
        'IND_FOGAO',
        'IND_FONTE_AGUA',
        'IND_FONTE_ENERGIA',
        'IND_FOSSA',
        'IND_GELADEIRA',
        'IND_MAQUINA_LAVAR',
        'IND_MATERIAL_MORADIA',
        'IND_MORA_AREA_RISCO',
        'IND_OUTROS_PROBLEMAS_FAMILIA',
        'IND_PROBLEMAS_FAMILIA',
        'IND_RETIRA_RANCHO',
        'IND_SOM',
        'IND_TIPO_MORADIA',
        'IND_TIPO_TERRENO',
        'IND_TV',
        'IND_USO_CONTINUO',
        'IND_VIDEO_CASSETE',
        'VLR_AGUA_LUZ',
        'VLR_ALUGUEL',
        'VLR_MEDICAMENTO',
        'VLR_TELEFONE'
    ];
}
