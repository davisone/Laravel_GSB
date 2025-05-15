<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosage extends Model
{
    public $timestamps = false; // Assuming there are no 'created_at' and 'updated_at' columns

    protected $table = 'dosage';

    protected $primaryKey = 'DOS_CODE'; // Assuming 'DOS_CODE' is the primary key

    public $incrementing = false; // Assuming 'DOS_CODE' is not an auto-incrementing primary key

    protected $fillable = [
        'DOS_CODE',
        'DOS_QUANTITE',
        'DOS_UNITE',
    ];
}
