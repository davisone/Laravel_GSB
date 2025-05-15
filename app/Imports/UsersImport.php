<?php
// app/Imports/UsersImport.php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return User::createOrUpdateFromImport([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => $row['password'], // Assuming password is not hashed in the CSV
            'first_name' => $row['first_name'],
            'date_of_hire' => $row['date_of_hire'],
            'postal_code' => $row['postal_code'],
            'city' => $row['city'],
        ]);
    }
}
