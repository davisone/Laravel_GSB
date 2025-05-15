<!-- resources/views/users/show.blade.php -->
    <div style="margin: -50px;">
        <h1 style="font-size: 24px; margin-bottom: 10px;">Détails de l'utilisateur</h1>

        <div style="margin-bottom: 15px;">
            <strong>Nom:</strong> {{ $user->name }}
        </div>

        <div style="margin-bottom: 15px;">
            <strong>Email:</strong> {{ $user->email }}
        </div>

        <!-- You can add more details as needed -->
    </div>