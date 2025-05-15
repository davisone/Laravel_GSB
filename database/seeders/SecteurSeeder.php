<?php
// database/seeders/SecteurSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Secteur;

class SecteurSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        $secteurs = [
            ['SEC_CODE' => 'A', 'SEC_LIBELLE' => 'Secteur A'],
            ['SEC_CODE' => 'B', 'SEC_LIBELLE' => 'Secteur B'],
            ['SEC_CODE' => 'C', 'SEC_LIBELLE' => 'Secteur C'],
            // Ajoutez autant de secteurs que nécessaire
        ];

        foreach ($secteurs as $secteur) {
            Secteur::create($secteur);
        }
    }
}
