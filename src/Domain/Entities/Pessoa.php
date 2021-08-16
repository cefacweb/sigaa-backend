<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pessoa';

    protected $fillable = [
        'COD_ATUALIZADOR',
        'COD_CAUSA_MIGRACAO',
        'COD_NATURALIDADE',
        'COD_NIS',
        'COD_PARENTESCO',
        'COD_PESSOA',
        'COD_PROFISSAO',
        'COD_RESPONSAVEL',
        'COD_TITULAR',
        'DAT_ATUALIZACAO',
        'DAT_NASCIMENTO',
        'DAT_PRIMEIRO_ATENDIMENTO',
        'DSC_HORARIO_TRABALHO',
        'DSC_LOCAL_TRABALHO',
        'DSC_OBSERVACAO',
        'IMG_FOTO',
        'IND_ESCOLARIDADE',
        'IND_ESTUDA',
        'IND_INSTITUICAO',
        'IND_MORA_JUNTO',
        'IND_RELIGIAO',
        'IND_SEXO',
        'IND_TIPO_PESSOA',
        'NOM_CONTATO',
        'NOM_PESSOA',
        'NUM_CALCADO',
        'NUM_CELULAR',
        'NUM_DDD_CELULAR',
        'NUM_DDD_FONE',
        'NUM_DOCUMENTO',
        'NUM_FONE',
        'NUM_PONTUACAO_FAMILIA',
        'TAM_ROUPA',
        'VLR_RENDA',
        'VLR_RENDA_FAMILIA'
    ];
}
