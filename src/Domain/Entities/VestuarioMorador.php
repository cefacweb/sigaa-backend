<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VestuarioMorador extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vestuario_morador';

    protected $fillable = [
        'COD_AGENDADOR',
        'COD_ATENDENTE',
        'COD_MORADOR',
        'DAT_AGENDA',
        'DAT_ATENDIMENTO',
        'DSC_OBSERVACAO',
        'QTD_PESSOAS'
    ];
}
