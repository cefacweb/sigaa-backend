<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vestuario extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'vestuario';

    protected $fillable = [
		'COD_AGENDADOR',
		'COD_ATENDENTE',
		'COD_PESSOA',
		'DAT_AGENDA',
		'DAT_ATENDIMENTO',
		'DSC_OBSERVACAO',
		'QTD_PESSOAS'
    ];
}
