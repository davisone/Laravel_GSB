<?php
// app/Http/Controllers/UserImportController.php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserImportController extends Controller
{
    public function showForm()
    {
        return view('import.importation');
    }

    public function importUsers()
    {
        request()->validate([
            'csvFile' => 'required|file|mimes:csv,txt',
        ]);

        Excel::import(new UsersImport, request()->file('csvFile'));

        // Redirect to the success view
        return view('import.success')->with('success', 'Users imported successfully!');
    }
}
