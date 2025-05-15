<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labo extends Model
{
    protected $table = 'labo';

    protected $fillable = [
        'LAB_CODE',
        'LAB_NOM',
        'LAB_CHEFVENTE',
    ];
}
