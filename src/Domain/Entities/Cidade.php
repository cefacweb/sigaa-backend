<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cidade';

    protected $fillable = [
        'COD_CIDADE',
        'NOM_CIDADE',
        'SIG_UF'
    ];
}
