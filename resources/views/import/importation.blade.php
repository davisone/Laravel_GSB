@extends("template")

@section("title", "Importation des utilisateurs")

@section("content")

    <div class="container mt-5">
        {{-- Display message for unauthenticated users --}}
        @guest
            <div class="alert alert-info">
                Vous devez vous connecter ou vous enregistrer pour accéder à cette page.
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-success">S'enregistrer</a>
        @else
            <h1 class="my-4">Importation des utilisateurs</h1>
            
            {{-- Display success message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- CSV import form --}}
            <form action="{{ route('import.users') }}" method="post" enctype="multipart/form-data" class="mb-5">
                @csrf
                <div class="mb-3">
                    <label for="csvFile" class="form-label">Sélectionnez un fichier CSV :</label>
                    <input type="file" class="form-control" id="csvFile" name="csvFile" accept=".csv" required>
                </div>

                <button type="submit" class="btn btn-primary">Importer</button>
            </form>

            {{-- Instructions and example content --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Instructions d'importation</h5>
                    <p class="card-text">
                        Pour importer des utilisateurs, sélectionnez un fichier CSV contenant les données des utilisateurs. Le fichier doit avoir les colonnes suivantes :<br>
                        <strong>name,email,password,first_name,date_of_hire,postal_code,city</strong>.
                    </p>
                    <p class="card-text">
                        Exemple de contenu CSV :
                        <pre>
                        name,email,password,first_name,date_of_hire,postal_code,city
                        John Doe,johndoe@example.com,secret123,John,2023-01-01,12345,New York
                        Jane Doe,janedoe@example.com,pass456,Jane,2023-02-15,67890,Los Angeles
                        Bob Smith,bobsmith@example.com,p@ssword,Bob,2023-03-30,54321,Chicago
                        Alice Johnson,alicejohnson@example.com,alicepass,Alice,2023-04-10,98765,San Francisco
                        Charlie Brown,charliebrown@example.com,cbpass,Charlie,2023-05-20,13579,Miami

                        </pre>
                    </p>
                </div>
            </div>
        @endguest
    </div>
@endsection
