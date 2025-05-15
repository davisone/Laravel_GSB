@extends("template")

@section("title", "Accueil")

@section("content")
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue sur GSB</h1>
        <p class="lead">Une plateforme innovante pour gérer vos comptes-rendus de visites médicales.</p>
        <hr class="my-4">
        <p>Explorez et gérez facilement vos rapports de visite, suivez vos praticiens, et bien plus encore.</p>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="mb-4">Fonctionnalités principales</h2>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gestion des praticiens</h5>
                            <p class="card-text">Ajoutez, modifiez et consultez des informations sur les praticiens.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rapports de visite</h5>
                            <p class="card-text">Enregistrez vos rapports de visite médicale de manière organisée.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Suivi personnalisé</h5>
                            <p class="card-text">Suivez vos activités et visualisez des statistiques sur vos visites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section "Contacter GSB" -->
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mb-4">Contacter GSB</h2>
            <p>Contacter nous à l'adresse suivante :</p>
            <ul>
                <li>Email: <a href="mailto:souffrance@gsb.fr">souffrance@gsb.fr</a></li>
                <li>Téléphone: (+33) 80 00 15 65 98</li>
                <li>Adresse: 1234 Somewhere Road #8254, Paris, CEDEX 15</li>
            </ul>
        </div>
    </div>
</div>
@endsection
