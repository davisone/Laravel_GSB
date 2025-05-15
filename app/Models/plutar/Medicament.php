<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $table = 'medicament';

    protected $fillable = [
        'MED_DEPOTLEGAL',
        'MED_NOMCOMMERCIAL',
        'FAM_CODE',
        'MED_COMPOSITION',
        'MED_EFFETS',
        'MED_CONTREINDIC',
        'MED_PRIXECHANTILLON',
    ];
}
