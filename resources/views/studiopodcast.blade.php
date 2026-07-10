{{-- resources/views/studiopodcast.blade.php --}}
{{-- Page "Studio Podcast" : présentation des studios média disponibles à la location --}}
<x-layout
    title="Location Studio Podcast à Brazzaville | Sophos Congo"
    description="Louez un studio média & podcast entièrement équipé à Brazzaville pour vos enregistrements, interviews et webinaires, avec Sophos Congo, cabinet de transformation digitale."
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

    {{-- Bannière d'en-tête de la page Studios Podcast --}}
    <section class="page-header" data-background="assets/img/studiopodcast.jpg">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content text-center">
                <h1 class="title">Nos Studios Podcast </h1>
                <h4 class="sub-title"><a class="home" href="i/">Accueil </a><span></span><a
                        class="inner-page" href="/studiopodcast"> Studios Podcast </a></h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    {{-- Carrousel présentant les différents studios podcast disponibles à la location --}}
<section class="project-section pt-150 pb-150 overflow-hidden">
        <div class="container">
            <div class="project-top heading-space">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char"
                        data-duration="0.9" data-stagger="0.03">Location</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">De Studios <br> <span> de podcast </span></h2>
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
                                    <a href="#"><img src="assets/img/imgpodcast/IMAGESTUDIO2.jpg"
                                            alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#" style="font-family: 'NewYork', 'sans-serif';" >Le Studio ALPHA</a></h3>
                                <span>1-6 PLACES AVEC LA RÉGIE + MONTAGE + RENDU 4K </span>
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
                                    <a href="#"><img src="assets/img/imgpodcast/IMAGE STUDIO3.jpg" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#" style="font-family: 'NewYork', 'sans-serif';" >Le Studio OMEGA</a></h3>
                                <span>1-3 PLACES AVEC LA RÉGIE + MONTAGE + RENDU 4K </span>
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
                                    <a href="#"><img src="assets/img/imgpodcast/IMAGE STUDIO6.jpg" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#" style="font-family: 'NewYork', 'sans-serif';" >Le Studio ÉCLIPSE</a></h3>
                                <span>1-6 PLACES AVEC LA RÉGIE + MONTAGE + RENDU 4K </span>
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
                                    <a href="#"><img src="assets/img/imgpodcast/IMAGE STUDIO8.jpg" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#" style="font-family: 'NewYork', 'sans-serif';" >Le Studio MINI BUDGET</a></h3>
                                <span>1-2 PLACES AVEC LA RÉGIE + MONTAGE + RENDU 4K </span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

{{-- Bandeau défilant (texte animé) : lien de téléchargement du catalogue des studios --}}
<div class="running-text">
        <div class="carouselTicker carouselTicker-start   data-speed="fast">
            <ul class="text-anim carouselTicker__list ">
                <li> <a href="assets/img/PDF/CATALOGUE_STUDIO_SOPHOS.pdf" Download>Télécharger le catalogue</a></li>
                <li> <a href="assets/img/PDF/CATALOGUE_STUDIO_SOPHOS.pdf" Download>Télécharger le catalogue</a></li>
                <li> <a href="assets/img/PDF/CATALOGUE_STUDIO_SOPHOS.pdf" Download>Télécharger le catalogue</a></li> 
                <li> <a href="assets/img/PDF/CATALOGUE_STUDIO_SOPHOS.pdf" Download>Télécharger le catalogue</a></li>               
            </ul>
        </div>
    </div>

{{-- Blocs désactivés (anciens portfolios de démonstration du template) : conservés en commentaire, non utilisés sur cette page --}}














    <!-- <section class="project-section pt-150 pb-150">
            <div class="container">
                <div class="section-heading text-center ">
                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9" data-stagger="0.03">Découvrez </h4>
                    <h2 class="section-title" data-text-animation="fade-in-bottom-line" data-split="line" data-duration="1" data-stagger="0.2">Nos studios <br> <span> de podcast </span></h2>
                </div>
                <div class="row  align-items-center">
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    <a href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-1.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">File uploading System</a></h3>
                                <span>UI/UX Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    <a href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-2.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">NFT Buy and Sell Platform</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    <a href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-3.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">Business development</a></h3>
                                <span>Branding</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    <a href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-4.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">Branding Design platform</a></h3>
                                <span>Branding Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    <a href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-7.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">Modern Logo Design</a></h3>
                                <span>Branding</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn">
                                    <a href="portfolio-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-8.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">Astri Website design</a></h3>
                                <span>Branding Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 -->





       <!--  <section class="project-section pt-150 pb-150">
            <div class="container">
                <div class="section-heading text-center ">
                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9" data-stagger="0.03">Découvrez </h4>
                    <h2 class="section-title" data-text-animation="fade-in-bottom-line" data-split="line" data-duration="1" data-stagger="0.2">Nos studios <br> <span> de podcast </span></h2>
                </div>
                <div class="row  align-items-center">
                    <div class="sponsor-carousel swiper" data-fade-from="right" data-fade-offset="150"
                        data-autoPlay="true" data-sliderSpeed="5000">
                        <div class="swiper-wrapper">
                            <div class="project-item ">
                                <div class="project-thumb swiper-slide">
                                    <div class="overlay"></div>
                                
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-1.png" alt="image"></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">File uploading System</a></h3>
                                <span>UI/UX Design</span>
                                </div>
                            </div>

                            <div class="project-item ">
                                <div class="project-thumb swiper-slide">
                                    <div class="overlay"></div>
                                
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-1.png" alt="image"></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">File uploading System</a></h3>
                                <span>UI/UX Design</span>
                                </div>
                            </div>

                            <div class="project-item ">
                                <div class="project-thumb swiper-slide">
                                    <div class="overlay"></div>
                                
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="portfolio-details.html"><img src="assets/img/project/project-1.png" alt="image"></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                <h3 class="title"><a href="portfolio-details.html">File uploading System</a></h3>
                                <span>UI/UX Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section> -->
        <!-- ./ project-section -->

 <!-- <div class="sponsor-carousel swiper" data-fade-from="right" data-fade-offset="150"
                        data-autoPlay="true" data-sliderSpeed="5000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/img/sponsor/sponsor-1.png" alt="sponsor">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/img/sponsor/sponsor-2.png" alt="sponsor">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/img/sponsor/sponsor-3.png" alt="sponsor">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/img/sponsor/sponsor-4.png" alt="sponsor">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/img/sponsor/sponsor-5.png" alt="sponsor">
                                    </div>
                                </div> 
                            </div>
                        </div> -->

{{-- Bloc d'appel à l'action pour la réservation de l'espace coworking (footer commun) --}}
@include('inc.coworking-cta')
</x-layout>
