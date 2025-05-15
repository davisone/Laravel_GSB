<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $table = 'presentation';

    protected $fillable = [
        'PRE_CODE',
        'PRE_LIBELLE',
    ];
}
