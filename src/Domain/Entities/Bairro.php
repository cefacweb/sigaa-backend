<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bairro';

    protected $fillable = [
        'COD_BAIRRO',
        'NOM_BAIRRO',
        'COD_BAIRRO',
        'NOM_BAIRRO',
        'COD_BAIRRO',
        'NOM_BAIRRO',
        'COD_BAIRRO',
        'NOM_BAIRRO'
    ];
}
