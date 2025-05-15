<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescrire extends Model
{
    protected $table = 'prescrire';

    protected $fillable = [
        'MED_DEPOTLEGAL',
        'TIN_CODE',
        'DOS_CODE',
        'PRE_POSOLOGIE',
    ];
}
