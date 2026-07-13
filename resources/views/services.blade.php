{{-- resources/views/services.blade.php --}}
{{-- Page "Nos Services" : liste détaillée des offres du cabinet --}}
<x-layout
    title="Nos Services — Transformation Digitale, IA & Communication | Sophos Congo"
    description="Découvrez les services du cabinet de transformation digitale Sophos Congo : stratégie de communication, transformation digitale & IA, nation branding, création de contenus, formation et consulting à Brazzaville."
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

    {{-- Bannière d'en-tête de la page Services (image seule) --}}
    <section class="page-header" data-background="assets/img/service2.jpg" style="height: 320px;">
        <div class="overlay"></div>
    </section>
    <!-- ./ page-header -->

    {{-- Titre de la page, place entre la banniere et la grille des services --}}
    <section class="page-header">
        <div class="container">
            <div class="page-header-content text-center" style="padding: 60px 0 40px 0;">
                <h1 class="title">Nos Services de Transformation Digitale</h1>
                <h4 class="sub-title"><a class="home" href="/">Accueil </a><span></span><a
                        class="inner-page" href="/services"> Services </a></h4>
            </div>
        </div>
    </section>

    {{-- Grille détaillée des 8 offres de services du cabinet --}}
    <section class="service-section-3 pt-150 pb-150">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-04.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">TRANSFORMATION DIGITALE <span>& INTELLIGENCE ARTIFICIELLE</span></a></h3>
                            <p>Marketing digital, développement web & mobile, UX/UI, intégration de solutions d'IA et vidéo marketing IA générative.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-07.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Consulting</a></h3>
                            <p>Conseil stratégique en communication et transformation, <br> veille sectorielle et
                                appui <br> à la préparation d'appels d'offres.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-01.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Stratégie <span>de Communication</span></a></h3>
                            <p>Audit de communication, diagnostic de marque, <br> élaboration de stratégies 360° et
                                <br> accompagnement des dirigeants et décideurs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-02.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Communication <span>Institutionnelle & Corporate</span></a>
                            </h3>
                            <p>Relations publiques et médias, communication <br> de crise et interne, valorisation
                                <br> des réalisations et de l'impact des organisations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-03.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Nation Branding <span>& Marketing Territorial</span></a></h3>
                            <p>Stratégie d'attractivité territoriale, promotion <br> des investissements et
                                valorisation <br> du patrimoine culturel et des territoires.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-05.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">CRÉATION DE CONTENUS <span>& DE MARQUE</span></a></h3>
                            <p>Identité visuelle, chartes graphiques, production vidéo et podcast, photographie, copywriting et personal branding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-06.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">FORMATION <span>PROFESSIONNELLE</span></a></h3>
                            <p>Programmes de formation en communication, marketing digital, IA appliquée et storytelling, en présentiel ou en intra-entreprise.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="{{ asset('assets/img/services-icons/SERVIES - LES ICONS-08.png') }}" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="/coworking">Sophos <span>Spaces</span></a></h3>
                            <p>Studio média & podcast, salle de réunion, salle de formation et espace coworking, au cœur de Brazzaville.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

    {{-- Section compétences / savoir-faire (barres de progression animées) --}}
    <section class="skill-section-2 bg-dark-2 pt-150 pb-150">
        <div class="container">
            <div class="skill-img skill-img-2 img-reveal">
                <div class="img-overlay"></div>
                <img src="assets/img/SERVICE-FOOTER.jpg" alt="skill">
            </div>
            <div class="skill-content-wrap mt-70 fade-wrapper">
                <div class="section-heading mb-0">
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">On prend
                        <br>Vos idées <span>et on les rend <br> innoubliables</span></h2>
                </div>
                <div class="skills-items">
                    <div class="skills-item fade-top">
                        <h4 class="title">Mobile & Web apps design <span>-</span> 96%</h4>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"
                                role="progressbar"
                                style="width: 90%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            </div>
                        </div>
                    </div>

                    <div class="skills-item fade-top">
                        <h4 class="title">Marketing digital <span>-</span> 96%</h4>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"
                                role="progressbar"
                                style="width: 96%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            </div>
                        </div>
                    </div>
                    <div class="skills-item fade-top">
                        <h4 class="title">Strategie de communication <span>-</span> 96%</h4>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"
                                role="progressbar"
                                style="width: 96%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            </div>
                        </div>
                    </div>
                    <div class="skills-item fade-top">
                        <h4 class="title">Identité visuelle & branding <span>-</span> 96%</h4>
                        <div class="progress">
                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"
                                role="progressbar"
                                style="width: 96%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ skill-section -->

{{-- Bloc d'appel à l'action pour la réservation de l'espace coworking (footer commun) --}}
@include('inc.coworking-cta')
</x-layout>
