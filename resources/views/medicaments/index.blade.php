@extends("template")

@section("title", "Liste des médicaments")

@section("content")
    <div class="container">
        <h1 class="my-4">Liste des médicaments</h1>

        <ul class="list-group">
            @forelse($medicaments as $medicament)
                <li class="list-group-item">
                    <a href="{{ route('medicaments.show', ['medicament' => $medicament]) }}" class="text-decoration-none">
                        <strong>{{ $medicament->MED_NOMCOMMERCIAL }}</strong> - {{ $medicament->MED_DEPOTLEGAL }}
                    </a>
                </li>
            @empty
                <li class="list-group-item">Aucun médicament trouvé.</li>
            @endforelse
        </ul>
    </div>
@endsection
