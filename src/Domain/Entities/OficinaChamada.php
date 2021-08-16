<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OficinaChamada extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oficina_chamada';

    protected $fillable = [
        'COD_OFICINA',
        'COD_PESSOA',
        'DAT_INICIO',
        'DAT_MATRICULA',
        'DAT_OFICINA',
        'IND_SITUACAO'
    ];
}
