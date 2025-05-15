<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realiser extends Model
{
    protected $table = 'realiser';

    protected $fillable = [
        'AC_NUM',
        'VIS_MATRICULE',
        'REA_MTTFRAIS',
    ];
}
