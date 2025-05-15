<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    protected $table = 'visiteur';
    protected $primaryKey = 'VIS_MATRICULE';
    public $incrementing = false;

    protected $fillable = [
        'VIS_MATRICULE',
        'VIS_NOM',
        'Vis_PRENOM',
        'VIS_ADRESSE',
        'VIS_CP',
        'VIS_VILLE',
        'VIS_DATEEMBAUCHE',
        'SEC_CODE',
        'LAB_CODE',
    ];
}
