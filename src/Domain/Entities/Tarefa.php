<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tarefa';

    protected $fillable = [
        'COD_TAREFA',
        'DSC_TAREFA',
        'IND_COORDENACAO'
    ];
}
