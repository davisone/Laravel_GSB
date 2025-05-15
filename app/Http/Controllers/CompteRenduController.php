<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PDF;

use App\Models\RapportVisite;
use App\Models\Praticien;

class CompteRenduController extends Controller
{




    public function generatePdf($id)
{
    // Récupérer le compte rendu
    $compteRendu = RapportVisite::find($id);

    // Vérifier si le compte rendu existe
    if (!$compteRendu) {
        abort(404);
    }

    // Vérifier si l'utilisateur actuel est autorisé à voir ce compte rendu
    if (Auth::id() !== $compteRendu->user_id) {
        // L'utilisateur n'est pas autorisé à voir ce compte rendu
        return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à accéder à ce compte rendu.');
    }

    // Charger la vue PDF en passant les données du compte rendu
    $pdf = PDF::loadView('compterendu.pdf', compact('compteRendu'));

    // Retourner le PDF en streaming
    return $pdf->stream('compterendu.pdf');
}

    public function index(Request $request)
    {
        // Get the sort field and order from the request
        $sortField = $request->input('sortField', 'RAP_DATE');
        $sortOrder = $request->input('sortOrder', 'asc');

        // Récupérer les comptes rendus de l'utilisateur connecté
        $comptesRendus = RapportVisite::with('praticien')
            ->where('user_id', Auth::id())
            ->orderBy($sortField, $sortOrder)
            ->get();

        // Format the date in the collection
        $comptesRendus->transform(function ($compteRendu) {
            $compteRendu->formatted_date = Carbon::parse($compteRendu->RAP_DATE)->format('d/m/Y');
            return $compteRendu;
        });

        // Get the distinct values for sorting options
        $sortableFields = ['RAP_DATE', 'praticien.PRA_NOM', 'praticien.PRA_PRENOM'];
        $sortOptions = collect($sortableFields)->map(function ($field) use ($sortField, $sortOrder) {
            $order = $field === $sortField ? ($sortOrder === 'asc' ? 'desc' : 'asc') : 'asc';
            return [
                'field' => $field,
                'order' => $order,
            ];
        });

        $praticiens = Praticien::all();

        return view('compterendu.index', [
            'comptesRendus' => $comptesRendus,
            'praticiens' => $praticiens,
            'sortOptions' => $sortOptions,
        ]);
    }

    public function create()
    {
        $praticiens = Praticien::all();

        return view('compterendu.create', compact('praticiens'));
    }

    public function store(Request $request)
    {
        // Utiliser le helper optional pour accéder en toute sécurité à la propriété user_id
        $userId = optional(auth()->user())->id;

        RapportVisite::create([
            'user_id' => $userId, // Utiliser la valeur obtenue ou null si l'utilisateur n'est pas authentifié
            'PRA_NUM' => $request->praticien,
            'RAP_DATE' => $request->date,
            'RAP_BILAN' => $request->bilan,
            'RAP_MOTIF' => $request->motif,
        ]);

        return redirect()->route('compterendu.index')->with('success', 'Compte-rendu ajouté avec succès.');
    }
}
