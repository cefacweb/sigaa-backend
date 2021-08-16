<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VestuarioPessoa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vestuario_pessoa';

    protected $fillable = [
        'COD_PESSOA',
        'DAT_AGENDA',
        'IND_RETIRADO',
        'NOM_BENEFICIARIO'
    ];
}
