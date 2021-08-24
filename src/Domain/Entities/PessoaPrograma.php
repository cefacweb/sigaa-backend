<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaPrograma extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pessoa_programa';

    protected $fillable = [
        'COD_ENTIDADE',
        'COD_PESSOA',
        'COD_PROGRAMA'
    ];
}
