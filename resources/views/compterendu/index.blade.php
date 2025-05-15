@extends("template")

@section("title", "Accueil")

@section("content")
    <div class="container">
        <h1>Comptes-Rendus</h1>

        @auth
            @if ($comptesRendus->isEmpty())
                <p>Aucun compte-rendu saisi.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>N° de Rapport</th> <!-- Ajout de la colonne ID -->
                            <th>
                                
                                    Date du compte-rendu
                                </a>
                            </th>
                            <th>
                                
                                    Praticien
                                </a>
                            </th>
                            <th>Ville du praticien</th>
                            <th>Motif de la visite</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comptesRendus as $compteRendu)
                            <tr>
                                <td>{{ $compteRendu->id }}</td> <!-- Affichage de l'ID du rapport -->
                                <td>{{ $compteRendu->formatted_date }}</td>
                                <td>
                                    @if ($compteRendu->praticien)
                                        {{ $compteRendu->praticien->PRA_NOM }} {{ $compteRendu->praticien->PRA_PRENOM }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    @if ($compteRendu->praticien)
                                        {{ $compteRendu->praticien->PRA_VILLE }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $compteRendu->RAP_MOTIF }}</td>
                                <td>
                                    <a href="{{ route('compterendu.generatePdf', ['id' => $compteRendu->id]) }}" class="btn btn-sm btn-primary">Générer PDF</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <a href="{{ route('compterendu.create') }}" class="btn btn-primary">Ajouter un Compte-Rendu</a>
        @else
            <div class="alert alert-info">
                Vous devez vous connecter ou vous enregistrer pour accéder à cette page.
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-success">S'enregistrer</a>
        @endauth
    </div>
@endsection
