<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travailler extends Model
{
    protected $table = 'travailler';

    protected $fillable = [
        'VIS_MATRICULE',
        'JJMMAA',
        'REG_CODE',
        'TRA_ROLE',
    ];
}
