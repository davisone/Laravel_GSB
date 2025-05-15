<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeIndividu extends Model
{
    protected $table = 'type_individu';

    protected $fillable = [
        'TIN_CODE',
        'TIN_LIBELLE',
    ];
}
