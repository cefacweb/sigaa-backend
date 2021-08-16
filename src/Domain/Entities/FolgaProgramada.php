<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolgaProgramada extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'folga_programada';

    protected $fillable = [
        'COD_OFICINA',
        'DAT_INICIO',
        'DAT_TERMINO',
        'DSC_FOLGA',
        'IND_RANCHO'
    ];
}
