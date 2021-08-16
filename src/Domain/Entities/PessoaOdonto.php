<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaOdonto extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pessoa_odonto';

    protected $fillable = [
        'COD_ATENDENTE',
        'COD_ATUALIZADOR',
        'COD_PESSOA',
        'DAT_ATENDIMENTO',
        'DAT_ATUALIZACAO',
        'DSC_EXAME_CLINICO',
        'DSC_HISTORICO_VIDA'
    ];
}
