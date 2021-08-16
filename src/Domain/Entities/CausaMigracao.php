<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CausaMigracao extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'causa_migracao';

    protected $fillable = [
        'COD_CAUSA_MIGRACAO',
        'DSC_CAUSA_MIGRACAO'
    ];
}
