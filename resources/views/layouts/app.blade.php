<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application Laravel')</title>

    <!-- Styles CSS (vous pouvez ajouter vos propres liens vers des fichiers CSS ici) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>

<!-- En-tête de l'application -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Mon Application</a>
        <!-- Ajoutez d'autres liens de navigation si nécessaire -->
    </nav>
</header>

<!-- Contenu principal -->
<main class="container mt-4">
    @yield('content')
</main>

<!-- Pied de page -->
<footer class="mt-4">
    <p class="text-center">&copy; {{ date('Y') }} Mon Application Laravel. Tous droits réservés.</p>
</footer>

<!-- Scripts JS (vous pouvez ajouter vos propres scripts ici) -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
