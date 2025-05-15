<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    use HasFactory;

    public $timestamps = false; // Assuming there are no 'created_at' and 'updated_at' columns

    protected $table = 'composant';

    protected $primaryKey = 'CMP_CODE';

    protected $fillable = [
        'CMP_CODE',
        'CMP_LIBELLE',
    ];
}