<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    protected $fillable = [
        'COD_BAIRRO',
        'COD_CIDADE',
        'COD_TAREFA',
        'COD_USUARIO',
        'DAT_EMISSAO_TERMO',
        'DAT_NASCIMENTO',
        'DSC_APELIDO',
        'DSC_AUTOMOVEL',
        'DSC_EMAIL',
        'DSC_ENDERECO',
        'DSC_PLACA',
        'DSC_SENHA_ACESSO',
        'DSC_SENHA_WEB',
        'IMG_FOTO',
        'IND_ESCOLARIDADE',
        'IND_STATUS',
        'IND_TIPO_USUARIO',
        'NOM_USUARIO',
        'NUM_DDD_CELULAR',
        'NUM_DDD_COMERCIAL',
        'NUM_DDD_RESIDENCIAL',
        'NUM_DOCUMENTO',
        'NUM_FONE_CELULAR',
        'NUM_FONE_COMERCIAL',
        'NUM_FONE_RESIDENCIAL'
    ];
}
