<?php
// app/Models/Labo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Labo extends Model
{
    protected $table = 'labo';
    protected $primaryKey = 'LAB_CODE';
    public $timestamps = false;

    protected $fillable = [
        'LAB_CODE', 'LAB_NOM', 'LAB_CHEFVENTE',
    ];

    public function visiteurs()
    {
        return $this->hasMany(Visiteur::class, 'LAB_CODE', 'LAB_CODE');
    }
}
