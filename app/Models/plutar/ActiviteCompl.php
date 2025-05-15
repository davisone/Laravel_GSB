<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiviteCompl extends Model
{
    use HasFactory;

    protected $table = 'activite_compl';

    protected $primaryKey = 'AC_NUM';

    protected $fillable = [
        'AC_DATE',
        'AC_LIEU',
        'AC_THEME',
        'AC_MOTIF',
    ];

    protected $casts = [
        'AC_DATE' => 'datetime',
    ];
}
