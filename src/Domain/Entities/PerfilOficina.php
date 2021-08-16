<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilOficina extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'perfil_oficina';

    protected $fillable = [
        'COD_CIDADE1',
        'COD_CIDADE2',
        'COD_PERFIL',
        'DAT_NATAL_LIMITE_MATRICULA',
        'DAT_NATAL_MAX_DATA_LIMITE',
        'DAT_NATAL_MIN_DATA_LIMITE',
        'DSC_ENDERECO1',
        'DSC_ENDERECO2',
        'DSC_PERFIL',
        'NOM_TESTEMUNHA1',
        'NOM_TESTEMUNHA2',
        'NUM_CPF1',
        'NUM_CPF2',
        'TXT_TERMO_ADESAO_OFICINA',
        'TXT_TERMO_ADESAO_VOLUNTARIO'
    ];
}
