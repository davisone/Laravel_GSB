<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Vite -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @vite(['resources/js/app.js'])

    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div id="sidebar" class="col-md-3">
                <div class="inner">
                    <!-- Authentication -->
                    <section id="auth">
                        @guest
                            <h2>Authentication</h2>
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        @else
                            <h2>Welcome, {{ Auth::user()->name }}</h2>
                            <ul>
                                <li><a href="{{ route('profile.show') }}">Profile</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </section>

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>Menu</h2>
                        </header>
                        <ul>
                            <li><a href="{{ url('compterendu') }}">Comptes rendus de visites</a></li>
                            <li><a href="{{ url('users') }}">Visiteurs</a></li>
                            <li><a href="{{ url('praticiens') }}">Praticiens</a></li>
                            <li><a href="{{ url('medicaments') }}">Médicaments</a></li>
                            <li><a href="{{ route('import.form') }}">Importer des visiteurs</a></li>
                        </ul>
                    </nav>

                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>Contacter GSB</h2>
                        </header>
                        <p>Contactez-nous à l'adresse suivante :</p>
                        <ul class="contact">
                            <li class="fa-envelope-o"><a href="mailto:souffrance@gsb.fr">souffrance@gsb.fr</a></li>
                            <li class="fa-phone">(+33) 80 00 15 65 98</li>
                            <li class="fa-home">1234 Somewhere Road #8254<br /> Paris, CEDEX 15</li>
                            <li><a href="{{ url('logout') }}">Déconnexion</a></li>
                        </ul>
                    </section>

                    <!-- Footer -->
                    <footer id="footer">
                        <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a
                                href="https://unsplash.com">Unsplash</a>. Design: <a
                                href="https://html5up.net">HTML5 UP</a>.</p>
                    </footer>
                </div>
            </div>

            <!-- Main Content -->
            <div id="content" class="col-md-9" style="margin-top: 30px;">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
