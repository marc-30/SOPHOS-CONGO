<!-- resources/views/home.blade.php -->
<x-layout title="Services">

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

    <section class="page-header" data-background="assets/img/service2.jpg">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content text-center">
                <h1 class="title">Services </h1>
                <h4 class="sub-title"><a class="home" href="i/">Accueil </a><span></span><a
                        class="inner-page" href="/services"> Services </a></h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="service-section-3 pt-150 pb-150">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-01.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Marketing <span>Digital</span></a></h3>
                            <p>Le marketing digital est un levier puissant <br> qui transforme votre présence en ligne
                                <br> en opportunités de croissance réelles et mesurables.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-02.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Identité Visuelle <span>& Branding</span></a>
                            </h3>
                            <p>L'identité visuelle est bien plus qu'un logo <br> c'est l'âme de votre marque, <br> celle
                                qui parle avant même que vous preniez la parole.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-03.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Strategie <span>De communication</span></a></h3>
                            <p>La stratégie de communication est l'art <br> de dire la bonne chose, au bon moment, <br>
                                à la bonne audience — pour un impact maximal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-04.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">CRÉATION DE CONTENU</a></h3>
                            <p>La création de contenu est l’art de raconter votre histoire avec authenticité pour capter l’attention et fidéliser durablement votre audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-05.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">UI/UX DESIGN</a></h3>
                            <p>Le UI/UX Design va bien au-delà de l’esthétique : il crée des interfaces intuitives et immersives qui transforment chaque interaction en expérience mémorable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-06.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">DÉVELOPPEMENT D’APPLICATION</a></h3>
                            <p>Le développement d’application concrétise vos idées en solutions mobiles et web performantes, intuitives et parfaitement adaptées à vos objectifs de croissance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-01.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Location <span>de studio</span></a></h3>
                            <p>Sophos, c’est aussi des studios modernes, équipés et prêts à l’emploi pour l’enregistrement de podcasts, émissions professionnelles, des lives, et des webinaires professionnels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-02.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">VIDEO MARKETING-IA</a></h3>
                            <p>Le vidéo marketing-IA transforme une simple idée en contenu visuel percutant et ultra-personnalisé, qui parle directement à votre audience et accélère votre croissance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item-2 service-item-3">
                        <div class="icon"><img src="assets/img/LES ICONS-03.png" width="70" alt="service"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="#">Sophos <span>Store</span></a></h3>
                            <p>  Vente d'Équipements Multimédia   Service de Réparation Express <br>  Assistance & Maintenance Logicielle</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

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

@include('inc.coworking-cta')
</x-layout>
