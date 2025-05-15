@extends("template")

@section("title", "Utilisateurs")

@section("content")
<div class="container">
    @auth
        <h1 class="my-4">Liste des utilisateurs</h1>

        <div class="row">
            <div class="col-md-6">
                <!-- Dropdown list of users -->
                <label for="userSelect">Choisir un utilisateur :</label>
                <select id="userSelect" class="form-control">
                    <option value="" disabled selected>Choisir un utilisateur</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <!-- Display user details with custom margin-top class -->
                <div id="userDetails" class="user-details" style="margin-top: 20px;"></div>
            </div>
        </div>

        <!-- Script to handle user selection -->
        <script>
            // Function to fetch and display user details
            function displayUserDetails(userId) {
                // Make an AJAX request to get user details
                fetch(`/users/${userId}`)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('userDetails').innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error fetching user details:', error);
                    });
            }

            // Event listener for user selection change
            document.getElementById('userSelect').addEventListener('change', function () {
                var selectedUserId = this.value;
                if (selectedUserId) {
                    displayUserDetails(selectedUserId);
                } else {
                    // Clear user details if no user is selected
                    document.getElementById('userDetails').innerHTML = '';
                }
            });
        </script>
    @else
        <div class="alert alert-info">
            Vous devez vous connecter ou vous enregistrer pour accéder à cette page.
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
        <a href="{{ route('register') }}" class="btn btn-success">S'enregistrer</a>
    @endauth
</div>

@endsection
