<!-- resources/views/components/layout.blade.php -->
@props([
    'title' => 'Sophos Congo — Cabinet de Transformation Digitale, Communication & IA à Brazzaville',
    'description' => "Sophos Congo, cabinet de transformation digitale et d'intelligence artificielle à Brazzaville : conseil stratégique, communication institutionnelle, nation branding, création de contenus et formation professionnelle.",
])
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="cabinet de transformation digitale, transformation digitale, transformation digitale Congo, transformation digitale Brazzaville, intelligence artificielle Congo, agence communication Brazzaville, Sophos Congo">
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Site Title -->
    <title>{{ $title }}</title>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sophos Congo">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/logo/SOPHOS LOGO WEB.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ asset('assets/img/logo/SOPHOS LOGO WEB.png') }}">

    <!-- Données structurées -->
    @php
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'Sophos Congo',
            'alternateName' => 'Sophos Congo — Cabinet de Transformation Digitale',
            'description' => "Cabinet de transformation digitale et d'intelligence artificielle à Brazzaville, proposant conseil stratégique, communication institutionnelle, nation branding, création de contenus et formation professionnelle.",
            'url' => url('/'),
            'logo' => asset('assets/img/logo/SOPHOS LOGO WEB.png'),
            'image' => asset('assets/img/logo/SOPHOS LOGO WEB.png'),
            'telephone' => '+242067768642',
            'email' => 'info@sophoscongo.com',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Ravin du Tchad, Impasse Eugène Etienne, Plateau / Centre Ville',
                'addressLocality' => 'Brazzaville',
                'addressCountry' => 'CG',
            ],
            'areaServed' => 'CG',
            'sameAs' => [
                'https://www.facebook.com/profile.php?id=61588482088145',
                'https://www.instagram.com/sophoscongoci/',
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carouselTicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <style>
        h4 .sponsor-title, h4 .sponsor-title:hover {
            color: white !important;
        }
    </style>
</head>

<body>

    {{ $slot }}

    <footer class="footer-section overflow-hidden">
        <div class="container">
            <div class="footer-text text-center">
                <h3 class="footer-header">Sophos Congo <a href="/contact" class="contact-btn"><i
                            class="fa-regular fa-arrow-right"></i></a></h3>
            </div>
            <div class="row footer-wrap">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <div class="footer-logo">
                                <a href="/"><img src="{{ asset('assets/img/logo/SOPHOS LOGO WEB.png') }}"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <p class="mb-25" style="fonmb-25ily: 'NewYork', 'sans-serif';">Vous imaginez, Nous créons.</p>
                        <ul class="social-list">
                            <li class="facebook">
                                <a href="https://www.facebook.com/profile.php?id=61588482088145" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            
                            <li class="instagram">
                                <a href="https://www.instagram.com/sophoscongoci/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-col-2">
                        <div class="widget-header">
                            <h3 class="widget-title">Services</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="/services">Stratégie de communication</a></li>
                            <li><a href="/services">Communication institutionnelle</a></li>
                            <li><a href="/services">Transformation digitale & IA</a></li>
                            <li><a href="/services">Création de contenus & de marque</a></li>
                            <li><a href="/coworking">Sophos Spaces</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Où nous trouver</h3>
                        </div>
                        <ul class="address-list">
                            <li>Ravin du Tchad, Plateau, Brazzaville.</li>
                            <li><a href="tel:+242067768642">+242 06 776 86 42</a></li>
                            <li><a href="mailto:info@sophoscongo.com">Info@sophoscongo.com</a></li>
                        </ul>
                    </div>
                </div>
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
    <!-- ./ footer-section -->

    <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
    <!--scrollup-->

    <!-- JS here -->
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
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
