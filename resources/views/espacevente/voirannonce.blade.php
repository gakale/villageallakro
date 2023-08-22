<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preview.colorlib.com/theme/vizew/archive-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:25 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialg-scale=1, shrink-to-fit=no" />

    <title>Espace vente - Allakro Village</title>

    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script nonce="4a73ea98-b739-40f4-88e7-a48119af771d">
        (function (w, d) {
            !(function (bt, bu, bv, bw) {
                bt[bv] = bt[bv] || {};
                bt[bv].executed = [];
                bt.zaraz = { deferred: [], listeners: [] };
                bt.zaraz.q = [];
                bt.zaraz._f = function (bx) {
                    return function () {
                        var by = Array.prototype.slice.call(arguments);
                        bt.zaraz.q.push({ m: bx, a: by });
                    };
                };
                for (const bz of ["track", "set", "debug"]) bt.zaraz[bz] = bt.zaraz._f(bz);
                bt.zaraz.init = () => {
                    var bA = bu.getElementsByTagName(bw)[0],
                        bB = bu.createElement(bw),
                        bC = bu.getElementsByTagName("title")[0];
                    bC && (bt[bv].t = bu.getElementsByTagName("title")[0].text);
                    bt[bv].x = Math.random();
                    bt[bv].w = bt.screen.width;
                    bt[bv].h = bt.screen.height;
                    bt[bv].j = bt.innerHeight;
                    bt[bv].e = bt.innerWidth;
                    bt[bv].l = bt.location.href;
                    bt[bv].r = bu.referrer;
                    bt[bv].k = bt.screen.colorDepth;
                    bt[bv].n = bu.characterSet;
                    bt[bv].o = new Date().getTimezoneOffset();
                    if (bt.dataLayer) for (const bG of Object.entries(Object.entries(dataLayer).reduce((bH, bI) => ({ ...bH[1], ...bI[1] }), {}))) zaraz.set(bG[0], bG[1], { scope: "page" });
                    bt[bv].q = [];
                    for (; bt.zaraz.q.length; ) {
                        const bJ = bt.zaraz.q.shift();
                        bt[bv].q.push(bJ);
                    }
                    bB.defer = !0;
                    for (const bK of [localStorage, sessionStorage])
                        Object.keys(bK || {})
                            .filter((bM) => bM.startsWith("_zaraz_"))
                            .forEach((bL) => {
                                try {
                                    bt[bv]["z_" + bL.slice(7)] = JSON.parse(bK.getItem(bL));
                                } catch {
                                    bt[bv]["z_" + bL.slice(7)] = bK.getItem(bL);
                                }
                            });
                    bB.referrerPolicy = "origin";
                    bB.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bt[bv])));
                    bA.parentNode.insertBefore(bB, bA);
                };
                ["complete", "interactive"].includes(bu.readyState) ? zaraz.init() : bt.addEventListener("DOMContentLoaded", zaraz.init);
            })(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>
<body>
@include('includes.header')

<div class="vizew-grid-posts-area mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                    <div class="archive-catagory">
                        <h4>Espace vente</h4>
                    </div>

                    <div class="view-options">
                        <a href="archive-grid.html" class="active"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                        <a href="archive-list.html"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row">
                    @foreach($ventes as $vente)

                    <div class="col-12 col-md-6">
                        <div class="single-post-area mb-50">
                            <div class="post-thumbnail">
                                <!-- Affichage de l'image de la vente -->
                                <img src="{{ asset($vente->photo) }}" alt="{{$vente->nom}}" />

                                <span class="video-duration">05.03</span> <!-- Si vous avez une durée ou autre info, remplacez ici -->
                            </div>

                            <div class="post-content">
                                <a href="#" class="post-cata cata-sm cata-success">Annonce </a>
                                <a href="single-post.html" class="post-title">{{$vente->nom}}</a>
                                <div class="post-meta d-flex">
                                    <!-- Vous pouvez remplacer ces icônes et compteurs par des informations pertinentes de votre modèle -->
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach



                    <nav class="mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/plugins/plugins.js"></script>

    <script src="js/active.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-23581568-13");
    </script>
    <script
        defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"7ed828bfada1dd84","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"
    ></script>

    <!-- Mirrored from preview.colorlib.com/theme/vizew/archive-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:30 GMT -->
</div>
</body>
</html>
