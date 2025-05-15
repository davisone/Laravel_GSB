<?php

// database/seeders/MedicamentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicament;

class MedicamentSeeder extends Seeder
{
    public function run()
    {
        $medicaments = [
            [
                'MED_DEPOTLEGAL' => 'PAR001',
                'MED_NOMCOMMERCIAL' => 'PARACETAMOL',
                'id_famille' => 1,
                'MED_COMPOSITION' => 'Paracetamol 500mg',
                'MED_EFFETS' => 'Relieves pain and reduces fever',
                'MED_CONTREINDIC' => 'Do not use if allergic to paracetamol',
                'MED_PRIXECHANTILLON' => 5.99,
            ],
            [
                'MED_DEPOTLEGAL' => 'VIA001',
                'MED_NOMCOMMERCIAL' => 'VIAGRA',
                'id_famille' => 2,
                'MED_COMPOSITION' => 'Sildenafil 50mg',
                'MED_EFFETS' => 'Improves erectile function',
                'MED_CONTREINDIC' => 'Not recommended for individuals with heart problems',
                'MED_PRIXECHANTILLON' => 19.99,
            ],
            [
                'MED_DEPOTLEGAL' => 'ADV001',
                'MED_NOMCOMMERCIAL' => 'ADVITIL',
                'id_famille' => 3,
                'MED_COMPOSITION' => 'Vitamin C, Vitamin D, Zinc',
                'MED_EFFETS' => 'Boosts immune system',
                'MED_CONTREINDIC' => 'Not recommended for individuals with vitamin allergies',
                'MED_PRIXECHANTILLON' => 9.99,
            ],
            [
                'MED_DEPOTLEGAL' => '3MYC7',
                'MED_NOMCOMMERCIAL' => 'TRIMYCINE',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Triamcinolone (acétonide) + Néomycine + Nystatine',
                'MED_EFFETS' => 'Ce médicament est un corticoïde à activité forte ou très forte associé à un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'ADIMOL9',
                'MED_NOMCOMMERCIAL' => 'ADIMOL',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Amoxicilline + Acide clavulanique',
                'MED_EFFETS' => 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'AMOX45',
                'MED_NOMCOMMERCIAL' => 'AMOXAR',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Amoxicilline',
                'MED_EFFETS' => 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.',
                'MED_CONTREINDIC' => 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'LIDOXY23',
                'MED_NOMCOMMERCIAL' => 'LIDOXYTRACINE',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Oxytétracycline +Lidocaïne',
                'MED_EFFETS' => 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'EVILR7',
                'MED_NOMCOMMERCIAL' => 'EVEILLOR',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Adrafinil',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptômes neurologiques chez le sujet âgé.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à l\'un des constituants.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'PHYSOI8',
                'MED_NOMCOMMERCIAL' => 'PHYSICOR',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Sulbutiamine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à l\'un des constituants.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'TXISOL22',
                'MED_NOMCOMMERCIAL' => 'TOUXISOL Vitamine C',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Tyrothricine + Acide ascorbique (Vitamine C)',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à l\'un des constituants et chez l\'enfant de moins de 6 ans.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'CLAZER6',
                'MED_NOMCOMMERCIAL' => 'CLAZER',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Clarithromycine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'DEPRIL9',
                'MED_NOMCOMMERCIAL' => 'DEPRAMIL',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Clomipramine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reçu un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'DIMIRTAM6',
                'MED_NOMCOMMERCIAL' => 'DIMIRTAM',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Mirtazapine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.',
                'MED_CONTREINDIC' => 'La prise de ce produit est contre-indiquée en cas de d\'allergie à l\'un des constituants.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'DOLRIL7',
                'MED_NOMCOMMERCIAL' => 'DOLORIL',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
                'MED_EFFETS' => 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
            [
                'MED_DEPOTLEGAL' => 'BACTIG10',
                'MED_NOMCOMMERCIAL' => 'BACTIGEL',
                'id_famille' => rand(1, 3),
                'MED_COMPOSITION' => 'Erythromycine',
                'MED_EFFETS' => 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.',
                'MED_PRIXECHANTILLON' => rand(1, 100) / 10,
            ],
        ];

        foreach ($medicaments as $medicament) {
            Medicament::create($medicament);
        }
    }
}
