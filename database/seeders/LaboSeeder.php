<?php

// database/seeders/LaboSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Labo;

class LaboSeeder extends Seeder
{
    public function run()
    {
        $labos = [
            ['LAB_CODE' => 'L1', 'LAB_NOM' => 'Pfizer', 'LAB_CHEFVENTE' => 'John Doe'],
            ['LAB_CODE' => 'L2', 'LAB_NOM' => 'Novartis', 'LAB_CHEFVENTE' => 'Jane Smith'],
            ['LAB_CODE' => 'L3', 'LAB_NOM' => 'Roche', 'LAB_CHEFVENTE' => 'Bob Johnson'],
            // Add more labos as needed
        ];

        foreach ($labos as $labo) {
            Labo::create($labo);
        }
    }
}
