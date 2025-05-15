<?php

// app/Models/RapportVisite.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RapportVisite extends Model
{   
    protected $dates = ['RAP_DATE'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    protected $table = 'rapport_visite';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'user_id', 'PRA_NUM', 'RAP_DATE', 'RAP_BILAN', 'RAP_MOTIF',
    ];


    public function visiteur()
    {
        return $this->belongsTo(Visiteur::class, 'VIS_MATRICULE', 'VIS_MATRICULE');
    }

    public function praticien()
    {
        return $this->belongsTo(Praticien::class, 'PRA_NUM', 'PRA_NUM');
    }
}
