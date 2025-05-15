<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interagir extends Model
{
    public $timestamps = false; // Assuming there are no 'created_at' and 'updated_at' columns

    protected $table = 'interagir';

    protected $fillable = [
        'MED_PERTURBATEUR',
        'MED_MED_PERTURBE',
    ];
}
