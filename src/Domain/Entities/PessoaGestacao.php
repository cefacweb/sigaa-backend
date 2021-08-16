<?php
// @author : Micheus - Ago/2021

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaGestacao extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pessoa_gestacao';

    protected $fillable = [
        'COD_ATUALIZADOR',
        'COD_ENTREGADOR1',
        'COD_ENTREGADOR2',
        'COD_PESSOA',
        'DAT_ATUALIZACAO',
        'DAT_ENTREGA1',
        'DAT_ENTREGA2',
        'DAT_PROVAVEL_PARTO',
        'DAT_REGISTRO_GESTACAO',
        'DAT_ULTIMA_MENSTRUACAO',
        'IND_EXAME_CANCER',
        'IND_PRI_ENXOVAL',
        'IND_SEG_ENXOVAL',
        'IND_SEXO_BEBE',
        'NOM_LOCAL_PRE_NATAL',
        'NUM_CARTEIRA_PRE_NATAL',
        'NUM_MESES_GESTACAO',
        'QTD_BEBE_FEMININO',
        'QTD_BEBE_MASCULINO',
        'QTD_PRI_ENXOVAL',
        'QTD_SEG_ENXOVAL'
    ];
}
