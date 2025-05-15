<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Praticien extends Model

{

    
    public $timestamps = false;
    public function typePraticien()
    {
        return $this->belongsTo(TypePraticien::class, 'TYP_CODE', 'TYP_CODE');
    }
    
    protected $table = 'praticien';
    protected $primaryKey = 'PRA_NUM';

    protected $fillable = [
        'PRA_NUM',
        'PRA_NOM',
        'PRA_PRENOM',
        'PRA_ADRESSE',
        'PRA_CP',
        'PRA_VILLE',
        'PRA_COEFNOTORIETE',
        'TYP_CODE',
    ];
}
