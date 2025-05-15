<?php

// database/seeders/RapportVisiteSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RapportVisite;

class RapportVisiteSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        // User 1
        RapportVisite::create([
            'user_id' => 1,
            'PRA_NUM' => 1,
            'RAP_DATE' => now(),
            'RAP_BILAN' => 'Consultation régulière pour le traitement de la tension artérielle',
            'RAP_MOTIF' => 'Hypertension',
        ]);

        RapportVisite::create([
            'user_id' => 1,
            'PRA_NUM' => 2,
            'RAP_DATE' => now(),
            'RAP_BILAN' => 'Suivi post-opératoire après une chirurgie orthopédique',
            'RAP_MOTIF' => 'Chirurgie',
        ]);

        RapportVisite::create([
            'user_id' => 1,
            'PRA_NUM' => 3,
            'RAP_DATE' => now(),
            'RAP_BILAN' => 'Évaluation de la progression de la physiothérapie',
            'RAP_MOTIF' => 'Physiothérapie',
        ]);

        // Users 2, 3, 4, 5
        for ($i = 2; $i <= 3; $i++) {
            RapportVisite::create([
                'user_id' => $i,
                'PRA_NUM' => 1,
                'RAP_DATE' => now(),
                'RAP_BILAN' => "Examens de routine pour le suivi de la santé",
                'RAP_MOTIF' => 'Examens de routine',
            ]);
        }
    }
}
