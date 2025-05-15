<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formuler extends Model
{
    public $timestamps = false; // Assuming there are no 'created_at' and 'updated_at' columns

    protected $table = 'formuler';

    protected $fillable = [
        'MED_DEPOTLEGAL',
        'PRE_CODE',
    ];
}
