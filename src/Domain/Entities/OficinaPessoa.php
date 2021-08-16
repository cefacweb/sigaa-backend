<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OficinaPessoa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oficina_pessoa';

    protected $fillable = [
        'COD_OFICINA',
        'COD_PESSOA',
        'DAT_INICIO',
        'DAT_MATRICULA',
        'IND_OFICINA_SITUACAO'
    ];
}
