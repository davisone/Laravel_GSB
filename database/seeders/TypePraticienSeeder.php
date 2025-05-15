<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\TypePraticien;

class TypePraticienSeeder extends Seeder
{
    public function run()
    {
        TypePraticien::create(['TYP_CODE' => 'C1', 'TYP_LIBELLE' => 'Cardiologue', 'TYP_LIEU' => 'Cabinet médical']);
        TypePraticien::create(['TYP_CODE' => 'D1', 'TYP_LIBELLE' => 'Dermatologue', 'TYP_LIEU' => 'Clinique dermatologique']);
        TypePraticien::create(['TYP_CODE' => 'O1', 'TYP_LIBELLE' => 'Ophtalmologiste', 'TYP_LIEU' => 'Centre ophtalmologique']);
        TypePraticien::create(['TYP_CODE' => 'P1', 'TYP_LIBELLE' => 'Pédiatre', 'TYP_LIEU' => 'Hôpital pédiatrique']);
        TypePraticien::create(['TYP_CODE' => 'G1', 'TYP_LIBELLE' => 'Gynécologue', 'TYP_LIEU' => 'Cabinet gynécologique']);
    }
}
