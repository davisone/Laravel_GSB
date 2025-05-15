<!-- resources/views/praticiens/index.blade.php -->
@extends("template")

@section("title", "Liste des praticiens")

@section("content")
<div class="container">
    <h1 class="my-4">Liste des praticiens</h1>

    <form action="{{ route('praticiens.index') }}" method="get" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <label for="type" class="form-label">Type :</label>
                            <select name="type" id="type" class="form-select">
                <option value="">Tous les types</option>
                @foreach($types as $type)
            <option value="{{ $type->TYP_LIBELLE }}" {{ request('type') == $type->TYP_LIBELLE ? 'selected' : '' }}>
                {{ $type->TYP_LIBELLE }}
            </option>
        @endforeach
            </select>

            </div>

            <div class="col-md-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ request('nom') }}">
            </div>

            <div class="col-md-3">
                <label for="ville" class="form-label">Ville :</label>
                <input type="text" name="ville" id="ville" class="form-control" value="{{ request('ville') }}">
            </div>

            <div class="col-md-3">
                <button type="submit" class="btn btn-primary mt-4">Rechercher</button>
            </div>
        </div>
    </form>

    <ul class="list-group">
    @forelse($praticiens as $praticien)
    <li class="list-group-item">
        <a href="{{ route('praticiens.show', ['praticien' => $praticien]) }}" class="text-decoration-none">
        </strong> {{ $praticien->typePraticien->TYP_LIBELLE }} <strong>{{ $praticien->PRA_NOM }}</strong> - {{ $praticien->PRA_VILLE }}<strong>
        </a>
    </li>
@empty
    <li class="list-group-item">Aucun praticien trouvé.</li>
@endforelse

    </ul>
</div>
@endsection
