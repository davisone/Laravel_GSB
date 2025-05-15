<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    protected $table = 'specialite';

    protected $fillable = [
        'SPE_CODE',
        'SPE_LIBELLE',
    ];
}
