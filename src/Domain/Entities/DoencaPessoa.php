<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoencaPessoa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'doenca_pessoa';

    protected $fillable = [
        'COD_DOENCA',
        'COD_PESSOA',
        'IND_IMPEDE_TRABALHAR'
    ];
}
