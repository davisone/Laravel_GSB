<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constituer extends Model
{
    public $timestamps = false; // Assuming there are no 'created_at' and 'updated_at' columns

    protected $table = 'constituer';

    protected $primaryKey = null; // Assuming there is no primary key, or it's a composite key

    public $incrementing = false; // Assuming there is no auto-incrementing primary key

    protected $fillable = [
        'MED_DEPOTLEGAL',
        'CMP_CODE',
        'CST_QTE',
    ];
}
