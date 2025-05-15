<!-- resources/views/praticiens/show.blade.php -->
@extends("template")

@section("title", "Info praticien")

@section("content")
    <div style="margin: 20px;">
        <h1 style="font-size: 24px; margin-bottom: 10px;">Détails du praticien</h1>

        <div style="margin-bottom: 15px;">
            <strong>Nom:</strong> {{ $praticien->PRA_NOM }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Prénom:</strong> {{ $praticien->PRA_PRENOM }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Adresse:</strong> {{ $praticien->PRA_ADRESSE }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Code postal:</strong> {{ $praticien->PRA_CP }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Ville:</strong> {{ $praticien->PRA_VILLE }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Coef. notoriété:</strong>
            <div class="rating">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $praticien->PRA_COEFNOTORIETE)
                        <span class="star">&#9733;</span>
                    @else
                        <span class="star">&#9734;</span>
                    @endif
                @endfor
            </div>
        </div>


        <div style="margin-bottom: 15px;">
            <strong>Type:</strong>
            @if($praticien->typePraticien)
                {{ $praticien->typePraticien->TYP_LIBELLE }}
            @else
                Non spécifié
            @endif
        </div>

        <!-- Ajoutez d'autres détails du praticien ici -->

        <a href="{{ route('praticiens.index') }}" style="text-decoration: none; color: #007BFF;">Retour à la liste</a>
    </div>
@endsection
