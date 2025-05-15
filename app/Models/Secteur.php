<?php
// app/Models/Secteur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    protected $table = 'secteur';
    protected $primaryKey = 'SEC_CODE';
    public $timestamps = false;

    protected $fillable = [
        'SEC_CODE', 'SEC_LIBELLE',
    ];

    public function visiteurs()
    {
        return $this->hasMany(Visiteur::class, 'SEC_CODE', 'SEC_CODE');
    }
}
