<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoradorRua extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *  
     * @var string
     */
    protected $table = 'morador_rua';

    protected $fillable = [
        'COD_ATUALIZADOR',
        'COD_CAUSA_MIGRACAO',
        'COD_MORADOR',
        'COD_NATURALIDADE',
        'DAT_ATUALIZACAO',
        'DAT_IDA_RUA',
        'DAT_NASCIMENTO',
        'DAT_PRIMEIRO_ATENDIMENTO',
        'DSC_BEM_ESSENCIAL',
        'DSC_CURSOS_INTERESSE',
        'DSC_DEPENDENTE',
        'DSC_DOCS_EM_FALTA',
        'DSC_ENDERECO',
        'DSC_EXP_PROFISSIONAL',
        'DSC_FICHA_CRIMINAL',
        'DSC_OBSERVACAO',
        'IMG_FOTO',
        'IND_ESCOLARIDADE',
        'IND_MORAR_CASA',
        'IND_SEXO',
        'IND_TRABALHAR',
        'NOM_MORADOR',
        'NUM_DOCUMENTO'
    ];
}
