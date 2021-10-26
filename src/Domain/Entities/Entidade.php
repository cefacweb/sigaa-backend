<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'entidade';

    protected $fillable = [
        'COD_ENTIDADE',
        'NOM_ENTIDADE'
    ];
}
