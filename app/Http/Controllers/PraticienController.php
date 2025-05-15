<?php

namespace App\Http\Controllers;

use App\Models\Praticien;
use App\Models\TypePraticien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PraticienController extends Controller
{
    
    public function home()
    {
        return view('home');
    }
    
    public function show(Praticien $praticien)
{
    return view('praticiens.show', compact('praticien'));
}
    public function index(Request $request)
    {
        $types = TypePraticien::all(); // Récupérer tous les types de praticiens

        $query = Praticien::query();
        // Filtrer par libellé
if ($request->filled('type')) {
    $query->whereHas('typePraticien', function ($subquery) use ($request) {
        $subquery->where('TYP_LIBELLE', $request->input('type'));
    });
}


        // Filtrer par nom
        if ($request->filled('nom')) {
            $query->where('PRA_NOM', 'like', '%' . $request->input('nom') . '%');
        }

        // Filtrer par ville
        if ($request->filled('ville')) {
            $query->where('PRA_VILLE', 'like', '%' . $request->input('ville') . '%');
        }

        $praticiens = $query->get();

        return view('praticiens.index', compact('praticiens', 'types'));
    }

    private function getTypeCodeFromInput($input)
    {

        return intval(substr($input, 1));
    }
}