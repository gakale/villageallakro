<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de 4 cartes</title>
    <link rel="stylesheet" href="{{ asset('css/espace.css') }}">
</head>
<body>

<div class="card-container">


    <div class="card" id="connexion">
        <h2>Se connecter</h2>
     <a href="{{route('logins')}}"  /> <p>Cliquez ici pour vous connecter.</p></a>
    </div>

    <div class="card" id="forum">
        <h2>Forum</h2>
        <a href="{{route('forum')}}"  />  <p>Accédez au forum.</p> </a>
    </div>

    <div class="card" id="chat">
        <h2>Chat</h2>
        <a href="{{route('chatify')}}"  />    <p>Rejoignez le chat.</p>  </a>
    </div>

    <div class="card" id="accueil">
        <h2>Accueil</h2>
        <a href="/"  />    <p>Retour à la page d'accueil.</p> </a>
    </div>
</div>

</body>
</html>
