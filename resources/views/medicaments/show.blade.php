@extends("template")

@section("title", "Détails du médicament")

@section("content")
    <div style="margin: 20px;">
        <h1 style="font-size: 24px; margin-bottom: 10px;">Détails du médicament</h1>

        <div style="margin-bottom: 15px;">
            <strong>ID:</strong> {{ $medicament->MED_DEPOTLEGAL }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Nom commercial:</strong> {{ $medicament->MED_NOMCOMMERCIAL }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Famille:</strong>
            @if($medicament->famille)
                {{ $medicament->famille->FAM_LIBELLE }}
            @else
                Non spécifiée
            @endif
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Composition:</strong> {{ $medicament->MED_COMPOSITION }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Effets:</strong> {{ $medicament->MED_EFFETS }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Contre-indications:</strong> {{ $medicament->MED_CONTREINDIC }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Prix échantillon:</strong> {{ $medicament->MED_PRIXECHANTILLON }}
        </div>

        <!-- Add more details as needed -->

        <a href="{{ route('medicaments.index') }}" style="text-decoration: none; color: #007BFF;">Retour à la liste</a>
    </div>
@endsection
