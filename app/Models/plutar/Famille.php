<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    public $timestamps = false; // Assuming there are no 'created_at' and 'updated_at' columns

    protected $table = 'famille';

    protected $primaryKey = 'FAM_CODE'; // Assuming 'FAM_CODE' is the primary key

    public $incrementing = false; // Assuming 'FAM_CODE' is not an auto-incrementing primary key

    protected $fillable = [
        'FAM_CODE',
        'FAM_LIBELLE',
    ];
}
