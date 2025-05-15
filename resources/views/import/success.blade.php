@extends("template")

@section("title", "Importation réussie")

@section("content")
    <div class="container">
        <h1 class="my-4">Importation réussie</h1>

        <div class="alert alert-success">
            Les utilisateurs ont été importés avec succès!
        </div>

        <!-- Add any additional content or links as needed -->
    </div>

    <script>
        setTimeout(function() {
            @auth
                // Redirect to the authenticated user's home page
                window.location.href = "{{ route('dashboard') }}";
            @else
                // Redirect to the public home page
                window.location.href = "{{ route('gsb.home') }}";
            @endauth
        }, 1800);
    </script>
@endsection
