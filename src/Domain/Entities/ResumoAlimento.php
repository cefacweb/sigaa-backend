<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumoAlimento extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resumo_alimento';

    protected $fillable = [
        'COD_ALIMENTO',
        'COD_PERFIL',
        'DAT_RESUMO',
        'QTD_ALIMENTO'
    ];
}
