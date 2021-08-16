<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioHorario extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuario_horario';

    protected $fillable = [
        'COD_USUARIO',
        'HOR_FIM',
        'HOR_INICIO',
        'NUM_DIA_SEMANA'
    ];
}
