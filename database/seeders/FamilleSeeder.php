<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Famille;

class FamilleSeeder extends Seeder
{
    public function run()
    {
        $familles = [
            ['FAM_LIBELLE' => 'Compléments Alimentaire'],
            ['FAM_LIBELLE' => 'Qui sert a rien'],
            ['FAM_LIBELLE' => 'Mortel'],
            // Add more families as needed
        ];

        foreach ($familles as $familleData) {
            Famille::create($familleData);
        }
    }
}
