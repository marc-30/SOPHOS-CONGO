<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Site Title -->
    <title>Sophos Congo, Agence de communication & Marketing digital</title>

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
                            <li><a href="/services">Strategie de communication</a></li>
                            <li><a href="/services">Marketing digital</a></li>
                            <li><a href="/services">Web Development</a></li>
                            <li><a href="/services">Identité visuelle & Branding </a></li>
                            <li><a href="/services">Location de Studio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Où nous trouver</h3>
                        </div>
                        <ul class="address-list">
                            <li>Abidjan, Cocody, Angré cité sir.</li>
                            <li><a href="tel:+2250716119095">+225 07 16 119 095</a></li>
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
