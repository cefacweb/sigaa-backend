<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaEscola extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pessoa_escola';

    protected $fillable = [
        'COD_ESCOLA',
        'COD_PESSOA',
        'DAT_MATRICULA',
        'DSC_DIFICULDADE_APRENDIZADO',
        'DSC_PROBLEMA_RELACIONAMENTO',
        'DSC_TURMA',
        'IND_FREQUENTA',
        'IND_REPETENTE',
        'IND_TURNO'
    ];
}
