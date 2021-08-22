<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoParceria extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipo_parceiria';

    protected $fillable = [
        'COD_TIPO_PARCERIA',
        'DSC_TIPO_PARCERIA',
        'IND_BENEFICIO'
    ];
}
