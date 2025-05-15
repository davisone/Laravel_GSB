<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePraticien extends Model
{
    public $timestamps = false;
    protected $table = 'type_praticien';
    protected $primaryKey = 'TYP_CODE';

    protected $fillable = [
        'TYP_CODE',
        'TYP_LIBELLE',
        'TYP_LIEU',
    ];
}
