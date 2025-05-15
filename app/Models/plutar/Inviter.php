<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inviter extends Model
{
    protected $table = 'inviter';

    protected $fillable = [
        'AC_NUM',
        'PRA_NUM',
        'SPECIALISTEON',
    ];
}
