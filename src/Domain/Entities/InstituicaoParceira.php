<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituicaoParceira extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'instituicao_parceira';

    protected $fillable = [
        'COD_BAIRRO',
        'COD_CIDADE',
        'COD_INSTITUICAO',
        'COD_TIPO_PARCERIA',
        'DSC_EMAIL',
        'DSC_ENDERECO',
        'NOM_CONTATO',
        'NOM_INSTITUICAO',
        'NUM_FONE1',
        'NUM_FONE2'
    ];
}
