{{-- resources/views/home.blade.php --}}
{{-- Page d'accueil du site Sophos Congo --}}
<x-layout
    title="Sophos Congo — Cabinet de Transformation Digitale, Communication & IA à Brazzaville"
    description="Sophos Congo est un cabinet de transformation digitale et d'intelligence artificielle à Brazzaville : conseil stratégique, communication institutionnelle, nation branding, création de contenus et formation."
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
                <a href="/"><img src="assets/img/logo/SOPHOS LOGO WEB.png" alt="logo"></a>
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
                        <p>Ravin du Tchad, Plateau, Brazzaville, </p>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+242067768642">+242 06 776 86 42</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope-open-text"></i>
                        <a href="mailto:Info@sophoscongo.com">Info@sophoscongo.com</a>
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

    {{-- Style spécifique à la vidéo de la bannière d'accueil --}}
    <style>
        .hero-video-box {
            position: relative;
        }
    </style>

    {{-- Bannière vidéo d'accueil (hero) --}}
    <section class="hero-section hero-2">
        <div class="container hero-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-video-box" data-cursor-text="Play Video">
                        <video class="video-area" loop="" muted="" autoplay="" playsinline="">
                            <source src="assets/img/video/presentation.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ hero-section -->

    {{-- Bandeau défilant (texte animé) mettant en avant l'espace coworking --}}
    <div class="running-text">
        <div class="carouselTicker carouselTicker-start" data-speed="fast">
            <ul class="text-anim carouselTicker__list">
                <li>Espace Coworking</li>
                <li>Un espace pour travailler, créer et vous concentrer</li>
                <li>Salles climatisées</li>
                <li>Bureaux privés</li>
                <li>Terrasses aérées</li>
                <li>Au cœur de Brazzaville</li>
                <li>Réservez votre place</li>
            </ul>
        </div>
    </div>
    <!-- ./ running-text -->

    {{-- Section "Le Studio" : présentation du cabinet Sophos Congo --}}
    <section class="about-section pt-150 pb-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-content about-content-2 fade-wrapper">
                        <div class="section-heading mb-60" id="lestudio">
                            <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char"
                                data-duration="0.9" data-stagger="0.03">Cabinet de Transformation Digitale</h4>
                            <h1 class="section-title" data-text-animation data-split="word" data-duration="1">Votre
                                marque <br> mérite d'être vue, <span>reconnue et mémorisée. <br> On s'en charge.</span>
                            </h1>
                        </div>
                        <div class="about-exp-box fade-top">
                            <!-- <div class="about-carousel swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="exp-year">
                                            <h3 class="title">32 <span class="icon">+</span></h3>
                                            <p>Years Experience</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="exp-year">
                                            <h3 class="title">64 <span class="icon">+</span></h3>
                                            <p>Award Winner</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div> -->
                            
                                <p>Sophos Congo est un cabinet de transformation digitale et <br> d'intelligence
                                    artificielle basé à Brazzaville. Nous accompagnons institutions et entreprises
                                    dans leur transition numérique, avec des stratégies qui anticipent les
                                    opportunités de demain.</p>
                                <!-- <div class="about-btn">
                                        <a href="about.html" class="cp-primary-btn">
                                            <span class="btn-text">
                                                <span class="btn-text-1">Voir Plus</span>
                                                <span class="btn-text-2">Voir Plus</span>
                                            </span>
                                        </a>
                                    </div> -->
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img about-img-2 img-reveal">
                        <div class="img-overlay"></div>
                        <img src="assets/img/image-accueil-3.jpg" alt="Cabinet de transformation digitale Sophos Congo à Brazzaville">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    {{-- Carrousel des logos partenaires --}}
    <section class="sponsor-section pb-150">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-4">
                    <div class="sponsor-text">
                        <h4 class="sponsor-title" style="color: white;"><span>2536+</span> Ils ont choisi les meilleurs <br> et ça se voit.
                        </h4>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="sponsor-carousel swiper" data-fade-from="right" data-fade-offset="150"
                        data-autoPlay="true" data-sliderSpeed="5000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 1.jpg') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 2.jpg') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 3.jpg') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 4.jpg') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 6.png') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 7.png') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 8.png') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 9.png') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 10.png') }}" alt="sponsor">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-item">
                                    <img src="{{ asset('assets/img/partenaires/PARTENAIRE 11.png') }}" alt="sponsor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ sponsor-section -->

    {{-- Aperçu des services (carrousel des 3 grandes offres) --}}
    <section class="service-section-2 pt-150 pb-150">
        <div class="container">
            <div class="section-heading text-center ">
                <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9"
                    data-stagger="0.03">Nos Services</h4>
                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Nos
                    <span>Services</span>
                </h2>
            </div>
            <div class="service-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-item-2">
                            <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-04.png') }}" width="70"
                                    alt="service"></div>
                            <div class="service-content">
                                <h3 class="title"><a href="/services">Transformation <span>Digitale & IA</span></a></h3>
                                <p>L'intelligence artificielle n'est plus une option, <br> c'est un levier de
                                    transformation <br> que nous mettons au service de votre organisation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item-2">
                            <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-05.png') }}" width="70"
                                    alt="service"></div>
                            <div class="service-content">
                                <h3 class="title"><a href="/services">Création de Contenus <span>&
                                            de Marque</span></a></h3>
                                <p>Du logo à la vidéo institutionnelle, <br> nous couvrons l'ensemble du spectre
                                    créatif <br> pour faire de votre communication un actif stratégique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item-2">
                            <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-01.png') }}" width="70"
                                    alt="service"></div>
                            <div class="service-content">
                                <h3 class="title"><a href="/services">Stratégie <span>De communication</span></a>
                                </h3>
                                <p>La stratégie de communication est l'art <br> de dire la bonne chose, au bon moment,
                                    <br> à la bonne audience — pour un impact maximal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

    <section class="project-section pt-150 pb-150 overflow-hidden">
        <div class="container">
            <div class="project-top heading-space">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char"
                        data-duration="0.9" data-stagger="0.03">Travaux Récents</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Des idées
                        audacieuses <br> <span>Des projets réussis </span></h2>
                </div>
                <div class="swiper-arrow">
                    <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="project-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                   
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/slide-travaux-realiser/SLIDE-1.jpg"
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">FAJARDO</a></h3>
                                <span>Branding et identité visuel </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/slide-travaux-realiser/SLIDE-2.jpg"
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">REENCA FACTORY</a></h3>
                                <span>Campagne pub réseaux sociaux</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                   
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/slide-travaux-realiser/SLIDE-3.jpg"
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">LOHEM JIZREEL DIABATÉ</a></h3>
                                <span>Branding et mise en page</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/slide-travaux-realiser/SLIDE-4.jpg"
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">SAMUEL AFFANI</a></h3>
                                <span>Branding et Realisation de pochette d'album pour le chantre SAMUEL AFFANI</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>

                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/slide-travaux-realiser/SLIDE-5.jpg"
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">PROUNDLY AFRICAN</a></h3>
                                <span>Branding, logo et identité visuel de PROUNDLY AFRICAN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    {{-- Blocs désactivés (témoignages clients, compteurs et vidéo de présentation) : conservés en commentaire pour une réactivation future --}}

    <!-- <section class="testimonial-section-2 pt-150 pb-150">
        {{-- <div class="container">
            <div class="row testi-top">
                <div class="col-lg-3 col-md-12"></div>
                <div class="col-lg-9 col-md-12">
                    <div class="section-heading">
                        <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char"
                            data-duration="0.9" data-stagger="0.03">Témoignage</h4>
                        <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Leurs mots
                            valent mieux <br> <span> que les nôtres </span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container testi-wrapper pb-150">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="testi-left-content">
                        <div class="testi-client-wrap">
                            <ul class="testi-author-list">
                                <li><img src="assets/img/images/hero-author-1.png" alt="author"></li>
                                <li><img src="assets/img/images/hero-author-2.png" alt="author"></li>
                                <li class="icon"><i class="fa-regular fa-plus"></i></li>
                            </ul>
                            <p class="desc">More then 25K clients <br> Reviews</p>
                        </div>
                        <div class="swiper-arrow">
                            <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left"></i></div>
                            <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="testi-right-content">
                        <div class="testi-carousel-2 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-item-wrap">
                                        <div class="testi-author-img">
                                            <img src="assets/img/testimony/TESTIMONY 1.jpg" alt="testi">
                                        </div>
                                        <div class="testi-item">
                                            <div class="icon"><img src="assets/img/icon/quote.png" alt="quote">
                                            </div>
                                            <p>Take your business to new heights with our Expert Guidance in identifying
                                                capitalizing On Growth opportunities. Whether you're Looking to Enter
                                                new markets</p>
                                            <div class="testi-author-box">
                                                <div class="testi-author">
                                                    <div class="content">
                                                        <h4 class="name">Ramon Liam</h4>
                                                        <span>Sr. Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testi-item-wrap">
                                        <div class="testi-author-img">
                                            <img src="assets/img/testimony/TESTIMONY 2.jpg" alt="testi">
                                        </div>
                                        <div class="testi-item">
                                            <div class="icon"><img src="assets/img/icon/quote.png" alt="quote">
                                            </div>
                                            <p>Take your business to new heights with our Expert Guidance in identifying
                                                capitalizing On Growth opportunities. Whether you're Looking to Enter
                                                new markets</p>
                                            <div class="testi-author-box">
                                                <div class="testi-author">
                                                    <div class="content">
                                                        <h4 class="name">Ramon Liam</h4>
                                                        <span>Sr. Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testi-item-wrap">
                                        <div class="testi-author-img">
                                            <img src="assets/img/testimony/TESTIMONY 3.jpg" alt="testi">
                                        </div>
                                        <div class="testi-item">
                                            <div class="icon"><img src="assets/img/icon/quote.png" alt="quote">
                                            </div>
                                            <p>Take your business to new heights with our Expert Guidance in identifying
                                                capitalizing On Growth opportunities. Whether you're Looking to Enter
                                                new markets</p>
                                            <div class="testi-author-box">
                                                <div class="testi-author">
                                                    <div class="content">
                                                        <h4 class="name">Ramon Liam</h4>
                                                        <span>Sr. Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}
        
        <!-- <div class="testi-counter-area">
                <div class="container">
                    <div class="row gy-lg-0 gy-5">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-item text-center">
                                <h3 class="title"><span class="odometer" data-count="32">0</span><span class="icon">K</span></h3>
                                <p>Project Completed</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-item text-center">
                                <h3 class="title"><span class="odometer" data-count="28">0</span><span class="icon">+</span></h3>
                                <p>Winning Awards</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-item text-center">
                                <h3 class="title"><span class="odometer" data-count="30">0</span><span class="icon">K</span></h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-item text-center">
                                <h3 class="title"><span class="odometer" data-count="89">0</span><span class="icon">+</span></h3>
                                <p>Expert Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ./ testimonial-section -->

        <!-- <div class="video-section">
            <div class="bg-img" data-background="assets/img/SERVICE-FOOTER.jpg"></div>
            <div class="play-btn">
                <a class="video-popup venobox" data-autoplay="true" data-vbtype="video"
                    href="https://youtu.be/JwC-Qx1lJso">
                    <span><i class="fa-solid fa-play"></i></span>
                    <img class="explore-text" src="assets/img/DECOUVRIR.png" alt="text">
                </a>
            </div>
        </div> -->
        <!-- ./ video-section -->

{{-- Bloc d'appel à l'action pour la réservation de l'espace coworking (footer commun) --}}
@include('inc.coworking-cta')
</x-layout>
