<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Site</title>
    <style>
        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* gris clair */
            color: #333; /* gris foncé */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Styles pour le header */
        header {
            background-color: #09f2b8; /* violet */
            padding: 10px 20px; /* Ajout de padding pour séparer les éléments */
            color: #fff; /* blanc */
            margin-bottom: 20px; /* Espacement entre le header et le contenu */
            display: flex;
            justify-content: space-between; /* Alignement des éléments sur les côtés */
            align-items: center; /* Centre les éléments verticalement */
        }

        /* Styles pour le menu de navigation */
        .menu {
            text-align: right; /* Aligner les liens à droite */
        }

        .menu a {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background-color: #22b4a7; /* violet */
            color: #fff; /* blanc */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Transition fluide pour les hover */
        }

        .menu a:hover {
            background-color: #08c; /* bleu clair */
        }

        /* Style pour les liens du menu */
        .menu a.nav-link {
            background-color: #b41ecf; /* violet foncé */
            color: #333; /* gris foncé */
        }

        .menu a.nav-link:hover {
            background-color: #fc00ff; /* rose vif */
            color: #fff; /* blanc */
        }

        /* Styles pour le bouton de déconnexion */
        .menu form button {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background-color: #22b4a7; /* violet */
            color: #fff; /* blanc */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transition fluide pour les hover */
        }

        .menu form button:hover {
            background-color: #08c; /* bleu clair */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <h1 style="margin: 0;">Mon Site</h1>
        <!-- Menu de navigation -->
        <div class="menu">
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            @else
                <a href="/">Login</a>
                <a class="nav-link" href="{{ route('register') }}">Register</a>
                <!-- Ajoutez d'autres liens de menu si nécessaire -->
            @endif
        </div>
    </header>

    @yield('content')

</body>

</html>
