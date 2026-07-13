{{-- Page d'erreur "habillée" reprenant le design complet du site (contrairement à errors::layout qui est minimaliste) --}}
{{-- Fichier d'origine : resources/views/components/layout.blade.php (mise en page générale du site, réutilisée ici pour les pages d'erreur) --}}
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    {{-- Titre de la page (onglet du navigateur) --}}
    <title>@yield('title')</title>

    {{-- Favicon à placer à la racine du dossier public --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    {{-- Feuilles de style CSS du thème --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carouselTicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    {{-- Écran de préchargement affiché pendant le chargement de la page --}}
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="preloader-anim">
                <div class="loading" data-loading-text="SOPHOS CONGO"></div>
            </div>
            <div class="preloader-area area-left"></div>
            <div class="preloader-area area-right"></div>
        </div>
    </div>

    {{-- Début de la zone d'en-tête : inclusion du header commun du site --}}
    @include('inc.header')

    {{-- Fin de l'en-tête principal --}}

    {{-- Boîte de recherche en pop-up (masquée par défaut, ouverte via JS) --}}
    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>
    {{-- Fin de la boîte de recherche en pop-up --}}



    {{-- Fond assombri affiché derrière le menu mobile lorsqu'il est ouvert --}}
    <div class="mobile-side-menu-overlay"></div>

    {{-- Bandeau d'en-tête de page affichant le code d'erreur, le message et le fil d'Ariane --}}
    <section class="page-header" data-background="{{ asset('assets/img/SERVICE-FOOTER.jpg') }}">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content text-center">
                <h1 class="title">@yield('code'): @yield('message')</h1>
                <h4 class="sub-title"><a class="home" href="/">Accueil </a><span></span><a
                        class="inner-page" href="#">@yield('message')</a></h4>
            </div>
        </div>
    </section>
    {{-- Fin du bandeau d'en-tête de page --}}

    {{-- Section principale de l'erreur : bouton de retour vers la page d'accueil --}}
    <section class="error-section pt-130 pb-130">
        <div class="container">
            <div class="error-content text-center">

                <div class="error-btn mt-40">
                    <a href="/" class="cp-primary-btn">
                        <span class="btn-text">
                            <span class="btn-text-1">Retour à la page d'accueil</span>
                            <span class="btn-text-2">Retour à la page d'accueil</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Fin de la section principale de l'erreur --}}


    {{-- Pied de page complet du site (identique sur toutes les pages, y compris les pages d'erreur) --}}
    <footer class="footer-section overflow-hidden">
        <div class="container">
           {{-- Bloc de titre du footer désactivé (laissé en commentaire dans le HTML d'origine, non utilisé) --}}
           <!--  <div class="footer-text text-center">
                <h3 class="footer-header">Sophos Congo <a href="/contact" class="contact-btn"><i
                            class="fa-regular fa-arrow-right"></i></a></h3>
            </div> -->
            <div class="row footer-wrap">
                {{-- Colonne 1 : logo, accroche et réseaux sociaux --}}
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <div class="footer-logo">
                                <a href="/"><img src="assets/img/logo/SOPHOS LOGO WEB.png" alt="logo"></a>
                            </div>
                        </div>
                        <p class="mb-25">Vous imaginez, Nous créons.</p>
                        <ul class="social-list">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Colonne 2 : liste des services proposés --}}
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-col-2">
                        <div class="widget-header">
                            <h3 class="widget-title">Services</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="/services">Strategie de communication</a></li>
                            <li><a href="/services">Marketing digital</a></li>
                            <li><a href="/services">Web Development</a></li>
                            <li><a href="/services">Identité visuelle & Branding </a></li>
                            <li><a href="/services">Location de Studio</a></li>
                        </ul>
                    </div>
                </div>
                {{-- Colonne 3 : coordonnées de l'entreprise --}}
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Où nous trouver</h3>
                        </div>
                        <ul class="address-list">
                            <li>Ravin du Tchad, Plateau, Brazzaville.</li>
                            <li><a href="tel:+242067768642">+242 06 776 86 42</a></li>
                            <li><a href="mailto:contact@sophoscongo.com">contact@sophoscongo.com</a></li>
                        </ul>
                    </div>
                </div>
                {{-- Colonne 4 : formulaire d'inscription à la newsletter --}}
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">S'abonner</h3>
                        </div>
                        <div class="footer-form mb-20">
                            <form action="#" class="ts-subscribe-form">
                                <input class="form-control" type="email" name="email"
                                    placeholder="votre adresse email">
                                <input type="hidden" name="action" value="mailchimpsubscribe">
                                <button class="submit"><i class="fa-light fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <div class="form-check form-item">
                            <input class="form-check-input" type="checkbox" value="" id="man">
                            <label class="form-check-label" for="man">
                                J'accepte les termes et conditions
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Bandeau de copyright et liens légaux en bas de page --}}
        <div class="copyright-area">
            <div class="container">
                <div class="row copyright-content">
                    <div class="col-md-6">
                        <p>© 2026 Sophos Congo. Tous droits réservés.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="copyright-list">
                            <li><a href="/contact">Conditions d'utilisation </a></li>
                            <li><a href="/contact">politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- Fin du pied de page --}}

    {{-- Indicateur de progression du scroll (rempli/affiché via JS) --}}
    <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
    {{-- Bouton "remonter en haut de page" --}}

    {{-- Scripts JavaScript : bibliothèques tierces puis scripts propres au site --}}
    <script src="{{ asset('assets/js/vendor/jquary-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.isotope.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/split-type.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/scroll-trigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.carouselTicker.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/nice-select.js') }}"></script>
    {{-- Scripts spécifiques au site (formulaire de contact, comportements généraux) --}}
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>