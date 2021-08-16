<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'alimento';

    protected $fillable = [
        'COD_ALIMENTO',
        'DSC_ALIMENTO',
        'VLR_PESO_UNITARIO',
        'IND_EVENTUAL',
        'COD_ALIMENTO',
        'DSC_ALIMENTO',
        'VLR_PESO_UNITARIO',
        'IND_EVENTUAL',
        'COD_ALIMENTO',
        'DSC_ALIMENTO',
        'VLR_PESO_UNITARIO',
        'IND_EVENTUAL',
        'COD_ALIMENTO',
        'DSC_ALIMENTO',
        'VLR_PESO_UNITARIO',
        'IND_EVENTUAL'
    ];
}
