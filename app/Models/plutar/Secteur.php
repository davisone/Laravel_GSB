<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    protected $table = 'secteur';

    protected $fillable = [
        'SEC_CODE',
        'SEC_LIBELLE',
    ];
}
