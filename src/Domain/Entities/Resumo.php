<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resumo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resumo';

    protected $fillable = [
        'COD_PERFIL',
        'NUM_ORDEM',
        'QTD_ANO',
        'QTD_HOJE',
        'QTD_MES',
        'QTD_SEMANA'
    ];
}
