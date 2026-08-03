{{-- resources/views/contact.blade.php --}}
{{-- Page "Contact" : coordonnées, formulaire d'envoi de message et carte --}}
<x-layout
    title="Contact — Sophos Congo, Cabinet de Transformation Digitale à Brazzaville"
    description="Contactez Sophos Congo, cabinet de transformation digitale et d'intelligence artificielle à Brazzaville. Plateau, Ravin du Tchad — +242 06 776 86 42."
>

    {{-- Écran de chargement affiché le temps que la page se charge --}}
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="preloader-anim">
                <div class="loading" data-loading-text="Sophos Congo"></div>
            </div>
            <div class="preloader-area area-left"></div>
            <div class="preloader-area area-right"></div>
        </div>
    </div>

    {{-- En-tête / barre de navigation principale --}}
    @include('inc.header')


    {{-- Fenêtre popup de recherche (ouverte via l'icône loupe du header) --}}
    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>
    <!-- /#popup-search-box -->

    {{-- Panneau latéral (sidebar) avec présentation et coordonnées --}}
    @include('inc.sidebar')

    {{-- Menu mobile latéral (déroulé sur petits écrans) --}}
    <div class="mobile-side-menu">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href="index-2.html"><img src="assets/img/logo/SOPHOS LOGO WEB.png" alt="logo"></a>
                <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <div class="side-menu-wrap"></div>
            <div class="side-menu-contact">
                <div class="side-menu-header">
                    <h3>Où nous trouver</h3>
                </div>
                <ul class="side-menu-list">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Ravin du Tchad, Plateau, Brazzaville. </p>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+242067768642">+242 06 776 86 42</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope-open-text"></i>
                        <a href="mailto:contact@sophoscongo.com">contact@sophoscongo.com</a>
                    </li>
                </ul>
            </div>
            <ul class="side-menu-social">
                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="g-plus"><a href="#"><i class="fab fa-fab fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- /.mobile-side-menu -->
    <div class="mobile-side-menu-overlay"></div>

    {{-- Bannière d'en-tête de la page Contact (image seule) --}}
    <section class="page-header" data-background="assets/img/SOPHOS-contact.jpg" style="height: 320px;">
        <div class="overlay"></div>
    </section>
    <!-- ./ page-header -->

    {{-- Titre de la page, place entre la banniere et le reste du contenu --}}
    <section class="page-header">
        <div class="container">
            <div class="page-header-content text-center" style="padding: 60px 0 40px 0;">
                <h1 class="title">Contactez <span>Nous</span></h1>
                <h4 class="sub-title"><a class="home" href="/">Accueil </a><span></span><a class="inner-page"
                        href="#">Créons ensemble</a></h4>
            </div>
        </div>
    </section>

    {{-- Bloc infos rapides : téléphone, email, adresse et horaires d'ouverture --}}
    <section class="contact-top-area pt-150 pb-150">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><img src="assets/img/CONTACTS - LES ICONS-08.png" width="70"
                                alt="icon"></div>
                        <div class="contact-content">
                            <span>Téléphone</span>
                            <h4 class="title"><a href="tel:+242067768642">+242 06 776 86 42</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><img src="assets/img/CONTACTS - LES ICONS-06.png" width="70"
                                alt="icon"></div>
                        <div class="contact-content">
                            <span>Adresse Mail</span>
                            <h4 class="title"><a href="mailto:contact@sophoscongo.com">contact@sophoscongo.com</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><img src="assets/img/CONTACTS - LES ICONS-04.png" width="70"
                                alt="icon"></div>
                        <div class="contact-content">
                            <span>Nos Bureaux</span>
                            <h4 class="title">Plateau, Brazzaville</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><img src="assets/img/CONTACTS - LES ICONS-02.png" width="70"
                                alt="icon"></div>
                        <div class="contact-content">
                            <span>Ouvert</span>
                            <h4 class="title">Lun - Ven 08h - 17h</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Formulaire de contact (envoi de message) et carte de localisation --}}
    <section class="contact-section pb-150">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-content">
                        {{-- Formulaire d'envoi de message --}}
                        <div class="blog-contact-form form-2">
                            <div class="section-heading mb-30">
                                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">On
                                    attend votre message <span>causons!</span></h2>
                            </div>
                            <div class="request-form">
                                <form action="{{ route('contact.send') }}" method="POST">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-item">
                                                <input type="text" name="fullname" class="form-control"
                                                    placeholder="Nom complet" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-item">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Adresse email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item">
                                                <input type="text" name="subject" class="form-control"
                                                    placeholder="Sujet" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item message-item">
                                                <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="submit-btn">
                                        <input type="submit" class="cp-primary-btn" value="Envoyer">
                                    </div>
                                </form>

                                <br> <br>

                                {{-- Message de confirmation affiché après un envoi réussi du formulaire --}}
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Carte Google Maps intégrée : localisation des bureaux --}}
                <div class="col-lg-5">
                    <div class="map-wrapper">
                        <div class="container">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3972.155664127059!2d-3.9219749250160314!3d5.393235994585817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjMnMzUuNyJOIDPCsDU1JzA5LjgiVw!5e0!3m2!1sfr!2sci!4v1774265166326!5m2!1sfr!2sci"
                                width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ contact-section -->


</x-layout>
