<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'first_name' => 'John',
                'address' => '123 Main St',
                'postal_code' => '12345',
                'city' => 'Example City',
                'date_of_hire' => '2022-01-01',
                'email' => 'john@gmail.com',
                'password' => Hash::make('azertyuiop'),
            ],
            [
                'name' => 'Jane Smith',
                'first_name' => 'Jane',
                'address' => '456 Oak St',
                'postal_code' => '67890',
                'city' => 'Sample City',
                'date_of_hire' => '2022-02-01',
                'email' => 'jane@gmail.com',
                'password' => Hash::make('azertyuiop'),
            ],
            [
                'name' => 'User',
                'first_name' => 'Test',
                'address' => '789 Pine St',
                'postal_code' => '54321',
                'city' => 'Test City',
                'date_of_hire' => '2022-03-01',
                'email' => 'user@gmail.com',
                'password' => Hash::make('azertyuiop'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
