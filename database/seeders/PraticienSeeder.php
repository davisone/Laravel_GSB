<?php
//php artisan db:seed --class=PraticienSeeder

namespace Database\Seeders;
use App\Models\Praticien;
use App\Models\TypePraticien;
use Illuminate\Database\Seeder;

class PraticienSeeder extends Seeder
{
    public function run()
{
    // Obtenez le nombre actuel de praticiens dans la base de données
    $currentPraticienCount = Praticien::count();

    // Types codes disponibles
    $availableTypes = ['C1', 'D1', 'O1', 'P1', 'G1'];

    foreach (range(1, 100) as $index) {
        // Incrémentez le PRA_NUM en fonction du nombre actuel de praticiens
        $praNum = $currentPraticienCount + $index;

        Praticien::create([
            'PRA_NUM' => $praNum,
            'PRA_NOM' => $this->getRandomLastName(),
            'PRA_PRENOM' => $this->getRandomFirstName(),
            'PRA_ADRESSE' => $this->getRandomAddress(),
            'PRA_CP' => $this->getRandomPostalCode(),
            'PRA_VILLE' => $this->getRandomCity(),
            'PRA_COEFNOTORIETE' => rand(1, 5),
            'TYP_CODE' => $availableTypes[array_rand($availableTypes)],
        ]);
    }
}


    private function getRandomLastName()
    {
        $lastNames = [
            'Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor',
            'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson', 'Garcia', 'Martinez', 'Robinson',
            'Clark', 'Rodriguez', 'Lewis', 'Lee', 'Walker', 'Hall', 'Allen', 'Young', 'Hill', 'Wright'
        ];
        
        return $lastNames[array_rand($lastNames)];
    }

    private function getRandomFirstName()
    {
        $firstNames = [
            'James', 'John', 'Robert', 'Michael', 'William', 'David', 'Richard', 'Joseph', 'Charles', 'Thomas',
            'Christopher', 'Daniel', 'Matthew', 'Anthony', 'Donald', 'Mark', 'Paul', 'Steven', 'Andrew', 'Kenneth',
            'Joshua', 'Brian', 'Kevin', 'George', 'Edward', 'Ronald', 'Timothy', 'Jason', 'Jeffrey', 'Ryan',
            'Jacob', 'Emily', 'Michaela', 'Isabella', 'Emma', 'Ava', 'Madison', 'Sophia', 'Olivia', 'Abigail',
            'Grace', 'Ella', 'Chloe', 'Avery', 'Scarlett', 'Sofia', 'Evelyn', 'Liam', 'Mason', 'Ethan',
            'Noah', 'Lucas', 'Oliver', 'Aiden', 'Caden', 'Jackson', 'Logan', 'Wyatt', 'Henry', 'Leo'
        ];
        
        return $firstNames[array_rand($firstNames)];
    }

    private function getRandomAddress()
    {
        return rand(100, 999) . ' ' . $this->getRandomStreetName();
    }

    private function getRandomStreetName()
    {
        $streets = [
            'Main St', 'Oak St', 'Maple Ave', 'Cedar Ln', 'Elm St', 'Pine Rd', 'Birch Dr', 'Cherry Ln', 'Chestnut St', 'Sycamore Rd',
            'Willow Dr', 'Hickory Ln', 'Aspen Ct', 'Beech St', 'Cypress Rd', 'Dogwood Dr', 'Fir Ln', 'Grove St', 'Hazel Rd', 'Ivy Ct',
            'Juniper Dr', 'Koa Ln', 'Larch St', 'Magnolia Rd', 'Nutmeg Ct', 'Olive Dr', 'Poplar Ln', 'Quince St', 'Redwood Rd', 'Spruce Ct',
            'Tamarack Dr', 'Umbrella Ln', 'Vine St', 'Wisteria Rd', 'Yew Ln', 'Zinnia Ct', 'Carnation Dr', 'Dahlia Ln', 'Heather St', 'Iris Rd',
            'Lily Ct', 'Marigold Dr', 'Narcissus Ln', 'Orchid St', 'Pansy Rd', 'Quince Ct', 'Rose Ln', 'Sunflower Dr', 'Tulip St', 'Violet Ct'
        ];
        
        return $streets[array_rand($streets)];
    }

    private function getRandomPostalCode()
    {
        return rand(10000, 99999);
    }

    private function getRandomCity()
    {
        $cities = [
            'New York', 'Los Angeles', 'Chicago', 'Houston', 'Phoenix', 'Philadelphia', 'San Antonio', 'San Diego', 'Dallas', 'San Jose',
            'Austin', 'Jacksonville', 'San Francisco', 'Indianapolis', 'Columbus', 'Fort Worth', 'Charlotte', 'Seattle', 'Denver', 'El Paso',
            'Detroit', 'Washington', 'Boston', 'Nashville', 'Memphis', 'Portland', 'Oklahoma City', 'Las Vegas', 'Louisville', 'Baltimore',
            'Milwaukee', 'Albuquerque', 'Tucson', 'Fresno', 'Sacramento', 'Kansas City', 'Long Beach', 'Mesa', 'Atlanta', 'Colorado Springs',
            'Raleigh', 'Omaha', 'Miami', 'Oakland', 'Minneapolis', 'Tulsa', 'Wichita', 'New Orleans', 'Arlington', 'Cleveland'
        ];
        
        return $cities[array_rand($cities)];
    }
}
