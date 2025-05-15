<?php

// app/Models/Famille.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;

    protected $table = 'famille';
    public $timestamps = false;

    protected $fillable = [
        'FAM_LIBELLE',
    ];
}
