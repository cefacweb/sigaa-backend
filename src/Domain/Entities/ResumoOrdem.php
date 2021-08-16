<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumoOrdem extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resumo_ordem';

    protected $fillable = [
        'DSC_RESUMO',
        'IND_CLASSE_RESUMO',
        'NUM_ORDEM'
    ];
}
