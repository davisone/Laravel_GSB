<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';

    protected $fillable = [
        'REG_CODE',
        'SEC_CODE',
        'REG_NOM',
    ];
}
