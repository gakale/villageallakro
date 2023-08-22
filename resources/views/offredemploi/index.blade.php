<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from preview.colorlib.com/theme/vizew/archive-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:25 GMT -->
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Offres - Allakro Village</title>

        <link rel="icon" href="img/core-img/favicon.ico" />

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <script nonce="793b61ef-6d62-41c5-aae8-6e998dec98be">
            (function (w, d) {
                !(function (j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = { deferred: [], listeners: [] };
                    j.zaraz.q = [];
                    j.zaraz._f = function (n) {
                        return function () {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({ m: n, a: o });
                        };
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = new Date().getTimezoneOffset();
                        if (j.dataLayer) for (const w of Object.entries(Object.entries(dataLayer).reduce((x, y) => ({ ...x[1], ...y[1] }), {}))) zaraz.set(w[0], w[1], { scope: "page" });
                        j[l].q = [];
                        for (; j.zaraz.q.length; ) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z);
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage])
                            Object.keys(A || {})
                                .filter((C) => C.startsWith("_zaraz_"))
                                .forEach((B) => {
                                    try {
                                        j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B));
                                    } catch {
                                        j[l]["z_" + B.slice(7)] = A.getItem(B);
                                    }
                                });
                        r.referrerPolicy = "origin";
                        r.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q);
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init);
                })(w, d, "zarazData", "script");
            })(window, document);
        </script>
    </head>
    <body>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

        @include('includes.header')

        <div class="vizew-archive-list-posts-area mb-80">
            <div class="container">
                <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                    <div class="archive-catagory">
                        <h4>Offres d'emplois disponibles</h4>
                    </div>

                    <div class="view-options">
                        <a href="archive-grid.html"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                        <a href="archive-list.html" class="active"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                    </div>
                </div>

                @foreach($offre_emplois as $offre)
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="post-thumbnail">
                                <img src="img/offres-d-emploi.jpg" alt="{{ $offre->titre }}" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-success">Offre d'emploi</a>
                                <a href="single-post.html" class="post-title mb-2">{{ $offre->titre }}</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <!-- Vous pouvez ajouter l'auteur et la date de publication si vous les avez -->
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">{{ $offre->description }}</p>
                                <!-- Les icônes de commentaires, vues et likes peuvent être ajustées selon vos besoins -->
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
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
            data-cf-beacon='{"rayId":"7ed828be2ec57755","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
            crossorigin="anonymous"
        ></script>
    </body>

    <!-- Mirrored from preview.colorlib.com/theme/vizew/archive-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:25 GMT -->
</html>
