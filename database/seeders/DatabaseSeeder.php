<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * php artisan db:seed pour lancer les seeders
     */
    public function run()
    {
        $this->call([
            TypePraticienSeeder::class,
            PraticienSeeder::class,
            FamilleSeeder::class,
            MedicamentSeeder::class,
            LaboSeeder::class,
            UserSeeder::class,
            SecteurSeeder::class,
            RapportVisiteSeeder::class,
            // Ajoutez d'autres seeders si nécessaire
        ]);
    }
}
