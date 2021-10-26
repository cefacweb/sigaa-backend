<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoradorObservacao extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'morador_observacao';

    protected $fillable = [
        'COD_ATENDENTE1',
        'COD_MORADOR',
        'DAT_OBSERVACAO',
        'DSC_OBSERVACAO'
    ];
}
