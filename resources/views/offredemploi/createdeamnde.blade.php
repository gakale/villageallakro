<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/vizew/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:05 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Candidature - Le village au beau milieu d'Abidjan</title>

<link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
<link rel="stylesheet" href="css/candidature/candidature.css">

     <!--   Mes fichier Bootstrap   -->
     <link rel="stylesheet" href="css/candidature/bootstrap.css">
     <link rel="stylesheet" href="css/candidature/bootstrap.min.css">
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

    <h2>Créer un nouveau profil de candidature</h2>

    <form action="{{route('offre_emplois.store')}}" method="post">
        @csrf

        <div class="container val3">
        <div class="container mt-3 pt-3 justify-content-center pb-3 shadow">
            <!-- DEBUT PREMIERE PARTIE -->
            <div class="d-flex align-items-center justify-content-between py-2 mb-3 titre-card">
                <div class="titre">
                    <h4>Poster une Candidature</h4>
                </div>
            </div>
            <!-- FIN PREMIERE PARTIE -->

            <!-- DEBUT DEUXIEME PARTIE-->
            <div class="row justify-content-center my-2 py-2">
                <div class="col-lg-10 d-flex">
                    <h4 class="text-center val2">Intitulé</h4>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-lg-8">
                        <div class="control-group">
                            <input type="text" id="Intitulé" name="Intitulé" placeholder="Ajouter l'Intitulé" required class="form-control p-4 bg-belge ng-untouched ng-pristine ng-invalid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DEUXIEME PARTIE -->

            <!-- DEBUT TROISIEME PARTIE -->
            <div class="row justify-content-center my-2 py-2">
                <div class="col-lg-10 d-flex">
                    <h4 class="text-center val2">Localité</h4>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-lg-8">
                        <div class="control-group">
                            <input type="text" id="Intitulé" name="Intitulé" placeholder="Ajouter une localité" required class="form-control p-4 bg-belge ng-untouched ng-pristine ng-invalid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN TROISIEME PARTIE -->

            <!-- DEBUT QUATRIEME PARTIE -->
            <div class="row justify-content-center my-2 py-2">
                <div class="col-lg-10 d-flex">
                    <h4 class="text-center val2">Type d'emploi rechercher</h4>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-lg-10">
                        <div class="control-group">
                            <select name="emploi" id="emploi" class="form-select p-4 bg-belge">
                                <option value="Temps plein">Temps plein</option>
                                <option value="Temps patiel">Temps patiel</option>
                                <option value="Stage">Stage</option>
                                <option value="Bénévolat">Bénévolat</option>
                                <option value="Contrat">Contrat</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN QUATRIEME PARTIE -->

            <!-- DEBUT CINQUIEME PARTIE -->
            <div class="row justify-content-center my-2 py-2">
                <div class="col-lg-10 d-flex justify-content-between">
                    <h4 class="text-center val2">Formation et Diplôme</h4>
                    <p>0 / 2000</p>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-lg-10">
                        <div class="control-group">
                            <textarea class="form-control val4" rows="5" id="description" name="text" placeholder="Commencez du plus recent au moins recent ligne après ligne"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN CINQUIEME PARTIE -->

            <!-- DEBUT SIXIEME PARTIE -->
            <div class="row justify-content-center my-2 py-2">
                <div class="col-lg-10 d-flex justify-content-between">
                    <h4 class="text-center val2">Expérience Professionnelles / Association / Bénévolat</h4>
                    <p>0 / 2000</p>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-lg-10">
                        <div class="control-group">
                            <textarea class="form-control val4" rows="5" id="description" name="text" placeholder="Commencez du plus recent au moins recent ligne après ligne"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN SIXIEME PARTIE -->

            <!-- DEBUT SEPTIEME PARTIE -->
            <div class="row justify-content-center my-2 py-2">
                <div class="col-lg-10 d-flex justify-content-between">
                    <h4 class="text-center val2">Autres Compétences</h4>
                    <p>0 / 2000</p>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-lg-10">
                        <div class="control-group">
                            <textarea class="form-control val4" rows="5" id="description" name="text" placeholder="Commencez du plus recent au moins recent ligne après ligne"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN SEPTIEME PARTIE -->

            <!-- DEBUT SEPTIEME PARTIE -->
            <div  class="d-flex justify-content-center">
                <button type="submit" id="envoyer" class="btn btn-success font-weight-semi-bold px-4 val5">Soumettre</button>
            </div>
            <!-- FIN SEPTIEME PARTIE -->
        </div>
    </div>

        <div class="form-group">
            <label for="acteur_id">Qui offre l'emploie</label>
            <select class="form-control" id="acteur_id" name="acteur_id" required>
                @foreach($acteurs as $acteur)
                <option value="{{ $acteur->id }}">{{ $acteur->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
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

<!--   Mes fichier Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

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