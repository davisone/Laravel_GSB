<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Models\Famille;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    public function index()
    {
        $medicaments = Medicament::all();
        return view('medicaments.index', compact('medicaments'));
    }

    public function show(Medicament $medicament)
    {
        
        return view('medicaments.show', compact('medicament'));
    }
}
