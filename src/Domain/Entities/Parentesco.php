<?php
// @author : Micheus - Ago/2021

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parentesco';

    protected $fillable = [
        'COD_PARENTESCO',
        'DSC_PARENTESCO'
    ];
}
