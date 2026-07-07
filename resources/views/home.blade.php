<!-- resources/views/home.blade.php -->
<x-layout title="Accueil">
    <!-- Preloader -->
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="preloader-anim">
                <div class="loading" data-loading-text="Sophos Congo"></div>
            </div>
            <div class="preloader-area area-left"></div>
            <div class="preloader-area area-right"></div>
        </div>
    </div>

    @include('inc.header')

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>
    <!-- /#popup-search-box -->

    @include('inc.sidebar')

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
                        <p>Abidjan, Cocody, Angré cité sir, </p>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+2250716119095">+225 07 16 119 095</a>
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

    <style>
        .hero-video-box {
            position: relative;
        }
        /* Gradient plus dense pour lisibilité sur toute la hauteur */
        .hero-video-box::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to top,
                rgba(0,0,0,0.92) 0%,
                rgba(0,0,0,0.70) 35%,
                rgba(0,0,0,0.35) 65%,
                rgba(0,0,0,0.08) 100%
            );
            pointer-events: none;
        }
        .hero-coworking-cta {
            position: absolute;
            bottom: 130px;
            left: 55px;
            z-index: 1;
            max-width: 560px;
            pointer-events: auto;
        }
        .hero-coworking-cta .eyebrow {
            display: inline-block;
            background: linear-gradient(135deg, #2563EB, #7C3AED);
            color: #fff;
            font-size: 0.68rem;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 20px;
            margin-bottom: 14px;
        }
        .hero-coworking-cta h2 {
            color: #fff;
            font-size: clamp(1.5rem, 2.8vw, 2.3rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 10px;
            text-shadow: 0 2px 12px rgba(0,0,0,0.5);
        }
        .hero-coworking-cta p {
            color: rgba(255,255,255,0.82);
            font-size: 0.95rem;
            margin-bottom: 24px;
            line-height: 1.6;
            text-shadow: 0 1px 6px rgba(0,0,0,0.4);
        }
        @media (max-width: 768px) {
            .hero-coworking-cta {
                left: 20px;
                right: 20px;
                bottom: 24px;
                max-width: 100%;
            }
            .hero-coworking-cta h2 {
                font-size: 1.25rem;
                margin-bottom: 8px;
            }
            .hero-coworking-cta p {
                display: none;
            }
            .hero-coworking-cta .eyebrow {
                font-size: 0.6rem;
                margin-bottom: 10px;
            }
        }
    </style>

    <section class="hero-section hero-2">
        <div class="container hero-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-video-box" data-cursor-text="Play Video">
                        <video class="video-area" loop="" muted="" autoplay="" playsinline="">
                            <source src="assets/img/video/presentation.mp4" type="video/mp4">
                        </video>
                        <div class="hero-coworking-cta">
                            <span class="eyebrow">Espace Coworking</span>
                            <h2>Un espace pour travailler,<br>créer et vous concentrer</h2>
                            <p>Salles climatisées, bureaux privés, terrasses aérées — au cœur d'Abidjan.</p>
                            <a href="/coworking" class="cp-primary-btn">
                                <span class="btn-text">
                                    <span class="btn-text-1">Réserver votre place</span>
                                    <span class="btn-text-2">Réserver votre place</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ hero-section -->

    <div class="running-text">
        <div class="carouselTicker carouselTicker-start" data-speed="fast">
            <ul class="text-anim carouselTicker__list">
                <li>Stratégie de communication</li>
                <li>Identité visuelle & branding</li>
                <li>Marketing Digital</li>
                <li>Création de contenus</li>
                <li>Location de Studio</li>
                <li>Podcast Webinaire Live</li>
                <li>Branding</li>
                <li>Web Design</li>
                <li>UI/UX Design</li>
                <li>Création d'application web/Mobile</li>
                <li>Sophos Store</li>
                <li>Vidéo Marketing IA</li>
                <li>Relations & communication institutionnelle</li>
                <li>Communication corporate et événementielle</li>
            </ul>
        </div>
    </div>
    <!-- ./ running-text -->

    <section class="about-section pt-150 pb-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-content about-content-2 fade-wrapper">
                        <div class="section-heading mb-60" id="lestudio">
                            <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char"
                                data-duration="0.9" data-stagger="0.03">Le studio</h4>
                            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Votre
                                marque <br> mérite d'être vue, <span>reconnue et mémorisée. <br> On s'en charge.</span>
                            </h2>
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
                            
                                <p>Vos objectifs sont notre mission, Nous créons des stratégies <br> qui ne se
                                    contentent pas de répondre au marché d'aujourd'hui — elles anticipent les
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
                        <img src="assets/img/image-accueil-3.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

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
                            <div class="icon"><img src="assets/img/LES ICONS-01.png" width="70"
                                    alt="service"></div>
                            <div class="service-content">
                                <h3 class="title"><a href="/services">Marketing <span>Digital</span></a></h3>
                                <p>Le marketing digital est un levier puissant <br> qui transforme votre présence en
                                    ligne <br> en opportunités de croissance réelles et mesurables.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item-2">
                            <div class="icon"><img src="assets/img/LES ICONS-02.png" width="70"
                                    alt="service"></div>
                            <div class="service-content">
                                <h3 class="title"><a href="service.html">Identité Visuelle <span>&
                                            Branding</span></a></h3>
                                <p>L'identité visuelle est bien plus qu'un logo <br> c'est l'âme de votre marque, <br>
                                    celle qui parle avant même que vous preniez la parole.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item-2">
                            <div class="icon"><img src="assets/img/LES ICONS-03.png" width="70"
                                    alt="service"></div>
                            <div class="service-content">
                                <h3 class="title"><a href="/services">Strategie <span>De communication</span></a>
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

@include('inc.coworking-cta')
</x-layout>
