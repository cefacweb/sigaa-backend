<?php

namespace Src\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfiChamadaMorador extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ofi_chamada_morador';

    protected $fillable = [
        'COD_MORADOR',
        'COD_OFICINA',
        'DAT_INICIO',
        'DAT_MATRICULA',
        'DAT_OFICINA',
        'IND_SITUACAO'
    ];
}
