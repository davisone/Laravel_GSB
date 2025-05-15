@extends("template")

@section("title", "Ajouter un Compte-Rendu")

@section("content")
    <div class="container">
        @guest
            <div class="alert alert-info">
                Vous devez vous connecter ou vous enregistrer pour accéder à cette page.
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-success">S'enregistrer</a>
        @else
            <h1>Ajouter un Compte-Rendu</h1>

            <form action="{{ route('compterendu.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="praticien">Praticien :</label>
                    <select name="praticien" id="praticien" class="form-control">
                        @foreach ($praticiens as $praticien)
                            <option value="{{ $praticien->PRA_NUM }}">{{ $praticien->PRA_NOM }} {{ $praticien->PRA_PRENOM }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="motif">Motif :</label>
                    <input type="text" name="motif" id="motif" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bilan">Bilan :</label>
                    <textarea name="bilan" id="bilan" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        @endguest
    </div>
@endsection
