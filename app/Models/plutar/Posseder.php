<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posseder extends Model
{
    protected $table = 'posseder';

    protected $fillable = [
        'PRA_NUM',
        'SPE_CODE',
        'POS_DIPLOME',
        'POS_COEFPRESCRIPTION',
    ];
}
