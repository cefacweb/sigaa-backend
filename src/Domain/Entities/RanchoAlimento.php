<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RanchoAlimento extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rancho_alimento';

    protected $fillable = [
        'COD_ALIMENTO',
        'COD_PESSOA',
        'DAT_ENTREGA',
        'DAT_PREVISTA',
        'QTD_ALIMENTO'
    ];
}
