<?php
namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;

    protected $table = 'medicament';
    protected $primaryKey = 'MED_DEPOTLEGAL';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MED_DEPOTLEGAL',
        'MED_NOMCOMMERCIAL',
        'id_famille', // Updated to use foreign key
        'MED_COMPOSITION',
        'MED_EFFETS',
        'MED_CONTREINDIC',
        'MED_PRIXECHANTILLON',
    ];

    // Define the relationship with the "Famille" model
    public function famille()
    {
        return $this->belongsTo(Famille::class, 'id_famille', 'id');
    }
}
