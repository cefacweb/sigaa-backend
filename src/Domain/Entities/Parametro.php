<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parametro';

    protected $fillable = [
        'COD_BAIRRO_ASSISTENCIA',
        'COD_BAIRRO_SEDE',
        'COD_CIDADE_ASSISTENCIA',
        'COD_CIDADE_PADRAO',
        'COD_CIDADE_SEDE',
        'DAT_ATUALIZACAO_RESUMO',
        'DAT_EXECUCAO_AUTOMACAO',
        'DSC_ENDERECO_ASSISTENCIA',
        'DSC_ENDERECO_SEDE',
        'IMG_LOGOTIPO',
        'MAX_FALTAS_CHAMADA',
        'MAX_IDADE_CAMPANHA',
        'NOM_ENTIDADE_ASSISTENCIA',
        'NOM_ENTIDADE_SEDE',
        'NUM_CEP_ASSISTENCIA',
        'NUM_CEP_SEDE',
        'NUM_CNPJ_ASSISTENCIA',
        'NUM_CNPJ_SEDE',
        'NUM_DDD_PADRAO',
        'NUM_MAX_ITENS_RANCHO',
        'NUM_MINUTOS_OCIOSOS',
        'QTD_DURACAO_RANCHO',
        'VLR_SALARIO_REF'
    ];
}
