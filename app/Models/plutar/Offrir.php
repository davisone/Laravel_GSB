<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offrir extends Model
{
    protected $table = 'offrir';

    protected $fillable = [
        'VIS_MATRICULE',
        'RAP_NUM',
        'MED_DEPOTLEGAL',
        'OFF_QTE',
    ];
}
