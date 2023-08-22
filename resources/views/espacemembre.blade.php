<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/vizew/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:05 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Espace membres - Le village au beau milieu d'Abidjan</title>

<link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script nonce="bad8bccf-c220-4159-b84a-86bd0fbb7625">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
@include('includes.header')




<div class="container">
    @if(session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h2>Inscrivez-vous !</h2>

    <form action="{{route('offre_emplois.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <textarea class="form-control" id="prenom" name="prenom" rows="6" required></textarea>
        </div>

        <div class="form-group">
            <label for="sexe">Sexe :</label>
                <select name="sexe" id="sexe" class="form-control" rows="6" required>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div>


        <div class="form-group">
            <label for="residence">Residence</label>
            <input type="text" class="form-control" id="residence" name="residence">
        </div>

        <div class="form-group">
            <label for="nationalite">Nationalite</label>
            <input type="text" class="form-control" id="nationalite" name="nationalite">
        </div>

        <div class="form-group">
            <label for="niveauetude">Niveau d'étude</label>
            <input type="text" class="form-control" id="niveauetude" name="niveauetude">
        </div>

        <div class="form-group">
            <label for="nbre_enfant">Nombre d'enfants</label>
            <input type="text" class="form-control" id="nbre_enfant" name="nbre_enfant">
        </div>


        <div class="form-group">
            <label for="fonction">Fonction</label>
            <input type="text" class="form-control" id="fonction" name="fonction" required>
        </div>

        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>
<script>
    // Si le message de succès existe, le faire disparaître après 3 secondes
    if (document.getElementById('successMessage')) {
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    }
</script>


@include('includes.footer')

<script src="{{asset ('js/jquery/jquery-2.2.4.min.js') }}"></script>

<script src="{{asset ('js/bootstrap/popper.min.js') }}"></script>

<script src="{{asset ('js/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{asset ('js/plugins/plugins.js') }}"></script>

<script src="{{asset ('js/active.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7ed828afd9597755","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/vizew/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:20 GMT -->
</html>