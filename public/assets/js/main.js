
// Fichier JS principal du thème : regroupe toutes les interactions front-end
// (préchargeur, menu, sliders Swiper, animations GSAP, curseur personnalisé, etc.).
// Le code est enveloppé dans une IIFE (fonction auto-exécutée) recevant jQuery en paramètre "$"
// afin d'éviter les conflits avec d'autres librairies utilisant aussi le symbole "$".
(function ($) {
    "use strict";

    // Récupère la largeur de l'écran/du device.
    var device_width = window.innerWidth;

    /*======================================
        Activation du préchargeur (preloader)
    ========================================*/
    // Une fois que toute la page (images, styles, etc.) est chargée...
    $(window).on("load", function (event) {

        // Préchargeur : ajoute la classe "loaded" au conteneur, puis supprime
        // l'élément #preloader après un court délai (effet de disparition).
        $(document).ready(function () {
            $('#container').addClass('loaded');
            if ($('#container').hasClass('loaded')) {
            $('#preloader').delay(1000).queue(function () {
                $(this).remove();
            });
            }
        });
        
        // Animation du texte (SplitType + GSAP) : découpe les éléments ".anim-text"
        // en lignes/caractères puis anime leur apparition (translation verticale).
        setTimeout(() => {
        var hasAnim = $(".anim-text");
            hasAnim.each(function () {
                var $this = $(this);
                var splitto = new SplitType($this, {
                types: "lines, chars",
                className: "char",
                });
                var chars = $this.find(".char");
                gsap.fromTo(
                chars,
                { y: "100%" },
                {
                    y: "0%",
                    duration: 0.9,
                    stagger: 0.03,
                    ease: "power2.out",
                }
                );
            });
        }, 1000);
    });

    // Permet de fermer manuellement le préchargeur au clic sur le bouton dédié.
    $(".preloader-close").on("click", function () {
        $("#preloader").delay(0).fadeOut(500);
    });

    $(document).ready(function () {

        // Ajoute une classe spécifique au <body> si le navigateur est Firefox
        // (utile pour appliquer des correctifs CSS propres à ce navigateur).
        if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
            $('body').addClass('firefox');
        }

        var header = $(".header"),
            stickyHeader = $(".primary-header");

        /*======================================
            Header collant (sticky) au défilement
        ========================================*/
        // Ajoute/retire la classe "fixed" sur le header selon la position de défilement,
        // et ajuste la hauteur du header pour éviter un saut de contenu (uniquement
        // sur les écrans larges, cf. media query passée en paramètre).
        function menuSticky(w) {
            if (w.matches) {
                
                $(window).on("scroll", function () {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 110) {
                        stickyHeader.addClass("fixed");
                    } else {
                        stickyHeader.removeClass("fixed");
                    }
                });
                if ($(".header").length > 0) {    
                    var  headerHeight = document.querySelector(".header"),
                        setHeaderHeight = headerHeight.offsetHeight;	
                    header.each(function () {
                        $(this).css({
                            'height' : setHeaderHeight + 'px'
                        });
                    });
                }
            }
        }

        // N'active le comportement "sticky" du header que sur les écrans >= 992px,
        // et seulement si le header porte la classe "sticky-active".
        var minWidth = window.matchMedia("(min-width: 992px)");
        if (header.hasClass("sticky-active")) {
            menuSticky(minWidth);
        }

        // Initialisation du menu mobile (plugin meanmenu) : transforme le menu
        // de navigation en menu déroulant adapté aux petits écrans.
        $(".mobile-menu-items").meanmenu({
            meanMenuContainer: ".side-menu-wrap",
            meanScreenWidth: "992",
            meanMenuCloseSize: "30px",
            meanRemoveAttrs: true,
            meanExpand: ['<i class="fa-solid fa-caret-down"></i>'],
        });

        // Menu latéral mobile (sidemenu) : ouverture/fermeture au clic
        // sur le bouton dédié, l'overlay ou le bouton de fermeture.
        $(".mobile-side-menu-toggle").on("click", function () {
            $(".mobile-side-menu, .mobile-side-menu-overlay").toggleClass("is-open");
        });

        $(".mobile-side-menu-close, .mobile-side-menu-overlay").on("click", function () {
            $(".mobile-side-menu, .mobile-side-menu-overlay").removeClass("is-open");
        });

        // Boîte de recherche en popup : affichage/masquage au clic sur l'icône
        // de recherche, avec fermeture automatique au clic en dehors de la boîte.
        $(function () {
            $("#popup-search-box").removeClass("toggled");

            $(".dl-search-icon").on("click", function (e) {
                e.stopPropagation();
                $("#popup-search-box").toggleClass("toggled");
                $("#popup-search").focus();
            });

            $("#popup-search-box input").on("click", function (e) {
                e.stopPropagation();
            });

            $("#popup-search-box, body").on("click", function () {
                $("#popup-search-box").removeClass("toggled");
            });
        });

        // Barre latérale en popup (sidebox) : ouverture/fermeture via des
        // écouteurs délégués sur les boutons déclencheurs et l'overlay.
        function sideBox() {
            $("body").removeClass("open-sidebar");
            $(document).on("click", ".sidebar-trigger", function (e) {
                e.preventDefault();
                $("body").toggleClass("open-sidebar");
            });
            $(document).on("click", ".sidebar-trigger.close, #sidebar-overlay", function (e) {
                e.preventDefault();
                $("body.open-sidebar").removeClass("open-sidebar");
            });
        }

        sideBox();

        // Initialisation de VenoBox pour les popups vidéo/image (lightbox).
        new VenoBox({
            selector: ".video-popup, .img-popup",
            bgcolor: "transparent",
            numeration: true,
            infinigall: true,
            spinner: "plane",
        });

        // Applique dynamiquement une image de fond CSS aux éléments possédant
        // l'attribut "data-background" (permet de définir le fond via le HTML/CMS).
        $("[data-background").each(function () {
            $(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
        });

        // Curseur personnalisé : ajoute un élément suivant la souris et le fait
        // suivre le déplacement du pointeur sur toute la fenêtre.
        $("body").append('<div class="mt-cursor"></div>');
        var cursor = $(".mt-cursor"),
            linksCursor = $("a, .swiper-nav, button, .cursor-effect"),
            crossCursor = $(".cross-cursor");

        $(window).on("mousemove", function (e) {
            cursor.css({
                transform: "translate(" + (e.clientX - 15) + "px," + (e.clientY - 15) + "px)",
                visibility: "inherit",
            });
        });

        // Compteur animé (Odometer) : déclenche l'affichage du chiffre cible
        // lorsque l'élément entre dans la zone visible (waypoint).
        $(".odometer").waypoint(
            function () {
                var odo = $(".odometer");
                odo.each(function () {
                    var countNumber = $(this).attr("data-count");
                    $(this).html(countNumber);
                });
            },
            {
                offset: "80%",
                triggerOnce: true,
            }
        );

        // Améliore les listes déroulantes <select> natives avec le plugin Nice Select.
        $("select").niceSelect();

        // Animation de la section "Récompenses" (awards) : au survol d'un élément
        // de la liste, l'image principale change avec une transition en fondu.

        let lastActiveImg = $(".award-main-img").attr("src"); // Stocke l'image par défaut

        $(document).on("mouseenter", ".award-list-item", function() {
            let newImg = $(this).data("img"); // Récupère l'image depuis l'attribut data

            // Transition douce : disparition en fondu, changement de la source, apparition en fondu
            $(".award-main-img").stop().fadeOut(300, function() {
                $(this).attr("src", newImg).fadeIn(300);
            });

            $(".award-list-item").removeClass("active"); // Retire la classe active de tous les éléments
            $(this).addClass("active"); // Ajoute la classe active à l'élément survolé

            lastActiveImg = newImg; // Mémorise la dernière image active
        });

        /*======================================
            Sliders Swiper (témoignages, à propos, services, projets, sponsors)
        ========================================*/
        // Slider des témoignages (variante 1)
        var swiperTesti = new Swiper(".testi-carousel", {
            slidesPerView: 2,
            spaceBetween: 24,
            slidesPerGroup: 1,
            loop: true,
            autoplay: true,
            grabcursor: true,
            speed: 600,
            navigation: {
                nextEl: '.testi-top .swiper-prev',
                prevEl: '.testi-top .swiper-next',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                767: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                1024: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
            },
        });


        // Slider de la section "À propos"
        var swiperAbout = new Swiper(".about-carousel", {
            slidesPerView: 1,
            spaceBetween: 24,
            slidesPerGroup: 1,
            loop: true,
            autoplay: true,
            grabcursor: true,
            speed: 600,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                767: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                1024: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
            },
        });

        // Slider des témoignages (variante 2)
        var swiperTesti = new Swiper(".testi-carousel-2", {
            slidesPerView: 1,
            spaceBetween: 24,
            slidesPerGroup: 1,
            loop: true,
            autoplay: true,
            grabcursor: true,
            speed: 600,
            navigation: {
                nextEl: '.testimonial-section-2 .swiper-prev',
                prevEl: '.testimonial-section-2 .swiper-next',
            },
        });

        // Slider des services
        var swiperService = new Swiper(".service-carousel", {
            slidesPerView: 3,
            spaceBetween: 24,
            slidesPerGroup: 1,
            loop: true,
            autoplay: true,
            grabcursor: true,
            speed: 600,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                767: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
                1024: {
                    slidesPerView: 3,
                    slidesPerGroup: 1,
                },
            },
        });

        // Slider des projets
        var swiperProject = new Swiper(".project-carousel", {
            slidesPerView: 1,
            spaceBetween: 24,
            grabcursor: true,
            speed: 600,
            navigation: {
                nextEl: '.project-top .swiper-prev',
                prevEl: '.project-top .swiper-next',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                992: {
                    slidesPerView: 1,
                },
                1200: {
                    slidesPerView: 1,
                }
            },
        });

        // Slider des logos de marques/sponsors, avec configuration dynamique
        // de l'autoplay et de la vitesse à partir des attributs data-* du HTML.
        var sponsorCarouselElement = document.querySelector(".sponsor-carousel");

        if (sponsorCarouselElement) {
            var autoplayEnabled = sponsorCarouselElement.getAttribute("data-autoPlay") === "true";
            var sliderSpeed = parseInt(sponsorCarouselElement.getAttribute("data-sliderSpeed"), 10);

            var swiperOptions = {
                loop: true,
                speed: sliderSpeed,
                spaceBetween: 120,
                slidesPerView: "auto",
                allowTouchMove: false,
                autoplay: false,
            };

            if (autoplayEnabled) {
                swiperOptions.autoplay = {
                    delay: 1,
                };
                swiperOptions.breakpoints = {
                    320: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    767: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    1024: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    1200: {
                        slidesPerView: 5,
                        slidesPerGroup: 5,
                    },
                };
            }

            var sponsorCarousel = new Swiper(".sponsor-carousel", swiperOptions);
        }


        // Effet "hover reveal" : fait suivre une image/élément enfant au curseur
        // lors du survol des éléments ".service-hover-reveal-item" (ex: aperçu image au survol d'un service).
        // hover reveal start
            const hoverItem = document.querySelectorAll(".service-hover-reveal-item");
            function moveImage(e, hoverItem, index) {
                const item = hoverItem.getBoundingClientRect();
                const x = e.clientX - item.x;
                const y = e.clientY - item.y;
                if (hoverItem.children[index]) {
                    hoverItem.children[index].style.transform = `translate(${x}px, ${y}px)`;
                }
            }
            hoverItem.forEach((item, i) => {
                item.addEventListener("mousemove", (e) => {
                    setInterval(moveImage(e, item, 1), 50);
                });
            });
	    // hover reveal end

        // Initialisation du bandeau défilant (carouselTicker), utilisé par exemple
        // pour un défilement continu de texte/logos.
        $('.carouselTicker-nav').carouselTicker({
        });
        $(".carouselTicker-start").carouselTicker({
            direction: "next",
        });

        // Texte défilant en boucle (marquee) : duplique le contenu des éléments
        // ".scroller" afin de créer un effet de défilement infini en CSS,
        // sauf si l'utilisateur a activé la préférence "réduire les animations".
        const scrollers = document.querySelectorAll(".scroller");

        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                scroller.setAttribute("data-animated", true);

                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }


        /*======================================
            Animation de révélation d'image au défilement (GSAP + ScrollTrigger)
        ========================================*/
        // Effet "reveal" : le conteneur et l'image glissent depuis des directions
        // opposées pour créer un effet de dévoilement au scroll.

        gsap.registerPlugin(ScrollTrigger);

        let revealContainers = document.querySelectorAll(".reveal");

        revealContainers.forEach((container) => {
        let image = container.querySelector("img");
        let tl = gsap.timeline({
            scrollTrigger: {
            trigger: container,
            toggleActions: "restart none none reset"
            }
        });

        tl.set(container, { autoAlpha: 1 });
            tl.from(container, 1.5, {
                xPercent: -100,
                ease: Power2.out
            });
            tl.from(image, 1.5, {
                xPercent: 100,
                scale: 1.3,
                delay: -1.5,
                ease: Power2.out
            });
        });

        // Effet "reveal" alternatif (overlay + zoom) : un cache (overlay) se rétracte
        // pendant que l'image effectue un léger zoom arrière, déclenché à l'entrée
        // dans le viewport via IntersectionObserver.
        const images = document.querySelectorAll(".img-reveal");

        // Anime la disparition de l'overlay (réduction de largeur à 0%).
        const removeOverlay = overlay => {
            let tl = gsap.timeline();

            tl.to(overlay, {
                duration: 1.4,
                ease: "Power2.easeInOut",
                width: "0%"
            });

            return tl;
        };

        // Anime le zoom arrière de l'image (de agrandie à taille normale).
        const scaleInImage = image => {
            let tl = gsap.timeline();

            tl.from(image, {
                duration: 1.4,
                scale: 1.4,
                ease: "Power2.easeInOut"
            });

            return tl;
        };

        // Pour chaque image concernée, construit une timeline combinant les deux
        // animations ci-dessus et la déclenche/inverse selon la visibilité (IntersectionObserver).
        images.forEach(image => {

            gsap.set(image, {
                visibility: "visible"
            });
        
            const overlay = image.querySelector('.img-overlay');
            const img = image.querySelector("img");

            const masterTL = gsap.timeline({ paused: true });
            masterTL
            .add(removeOverlay(overlay))
            .add(scaleInImage(img), "-=1.4");
        
        
        let options = {
            threshold: 0
        }

            const io = new IntersectionObserver((entries, options) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        masterTL.play();
                    } else {
                masterTL.progress(0).pause()
            }
                });
            }, options);

            io.observe(image);
        });

        /*======================================
            Animations de texte au défilement (data-text-animation)
            Lit les attributs data-* (data-text-animation, data-duration, data-stagger,
            data-delay, data-ease, data-scroll, data-offset, data-split) sur chaque élément
            pour configurer dynamiquement le type d'animation GSAP à appliquer au texte
            (slide-up, slide-down, rotate-in, fade-in, etc.), avec ou sans lien au scroll (scrub).
        ========================================*/

        // Découpe tous les éléments concernés en lignes/mots/caractères via SplitType,
        // nécessaire pour pouvoir animer chaque fragment de texte séparément.
        let typeSplit = new SplitType("[data-text-animation]", {
            types: "lines,words, chars",
            className: "line",
        });
        var text_animations = document.querySelectorAll(
            "[data-text-animation]"
            );

            // Déclenche la lecture de la timeline d'animation lorsque l'élément
            // entre dans le viewport (80% depuis le haut de l'écran).
            function createScrollTrigger(triggerElement, timeline) {
            ScrollTrigger.create({
                trigger: triggerElement,
                start: "top 80%",
                onEnter: () => timeline.play(),
                toggleClass: {targets: triggerElement, className: "active"} 
            });
        }

            text_animations.forEach((animation) => {
            let type = "slide-up",
            duration = 0.75,
            offset = 80,
            stagger = 0.6,
            delay = 0,
            scroll = 1,
            split = "line",
            ease = "power2.out";
        // Lit les attributs data-* de l'élément pour surcharger les valeurs par défaut ci-dessus
        if (animation.getAttribute("data-stagger")) {
            stagger = animation.getAttribute("data-stagger");
        }
        if (animation.getAttribute("data-duration")) {
            duration = animation.getAttribute("data-duration");
        }
        if (animation.getAttribute("data-text-animation")) {
            type = animation.getAttribute("data-text-animation");
        }
        if (animation.getAttribute("data-delay")) {
            delay = animation.getAttribute("data-delay");
        }
        if (animation.getAttribute("data-ease")) {
            ease = animation.getAttribute("data-ease");
        }
        if (animation.getAttribute("data-scroll")) {
            scroll = animation.getAttribute("data-scroll");
        }
        if (animation.getAttribute("data-offset")) {
            offset = animation.getAttribute("data-offset");
        }
        if (animation.getAttribute("data-split")) {
            split = animation.getAttribute("data-split");
        }
        // Cas où l'animation est liée au scroll (data-scroll="1", valeur par défaut) :
        // chaque type d'animation ("type") construit sa propre timeline GSAP,
        // déclenchée via createScrollTrigger() lorsque l'élément entre dans le viewport.
        if (scroll == 1) {
            if (type == "slide-up") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                yPercent: offset,
                duration,
                ease,
                opacity: 0,
                stagger: { amount: stagger },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "slide-down") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                yPercent: -offset,
                duration,
                ease,
                opacity: 0,
                stagger: { amount: stagger },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "rotate-in") {
            let tl = gsap.timeline({ paused: true });
            tl.set(animation.querySelectorAll(`.${split}`), {
                transformPerspective: 400,
            });
            tl.from(animation.querySelectorAll(`.${split}`), {
                rotationX: -offset,
                duration,
                ease,
                force3D: true,
                opacity: 0,
                transformOrigin: "top center -50",
                stagger: { amount: stagger },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "slide-from-left") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                xPercent: -offset,
                duration,
                opacity: 0,
                ease,
                stagger: { amount: stagger },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "slide-from-right") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                xPercent: offset,
                duration,
                opacity: 0,
                ease,
                stagger: { amount: stagger },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "fade-in") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                duration,
                ease,
                opacity: 0,
                stagger: { amount: stagger },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "fade-in-right") {
                let tl = gsap.timeline({ paused: true });
                tl.from(animation.querySelectorAll(`.${split}`), {
                    x: 100,
                    autoAlpha: 0,
                    duration,
                    stagger: stagger,
                });
                createScrollTrigger(animation, tl);
            }
            if (type == "fade-in-bottom-line") {
                let tl = gsap.timeline({ paused: true });
                tl.from(animation.querySelectorAll(`.${split}`), {
                    autoAlpha: 0,
                    rotationX: -80,
                    force3D: true,
                    transformOrigin: "top center -50",
                    delay: 0.3,
                    duration,
                    stagger: stagger,
                });
                createScrollTrigger(animation, tl);
            }
            if (type == "fade-in-random") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                duration,
                ease,
                opacity: 0,
                stagger: { amount: stagger, from: "random" },
            });
            createScrollTrigger(animation, tl);
            }
            if (type == "scrub") {
            let tl = gsap.timeline({
                scrollTrigger: {
                trigger: animation,
                start: "top 90%",
                end: "top center",
                scrub: true,
                },
            });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0.2,
                duration,
                ease,
                stagger: { amount: stagger },
            });
            }

            // Évite le flash de contenu non stylé (FOUC) en rendant le texte visible
            // une fois les timelines d'animation préparées.
            gsap.set("[data-text-animation]", { opacity: 1 });
        } else {
            // Cas où l'animation n'est pas liée au scroll (data-scroll != 1) :
            // les mêmes types d'animation sont définis mais sans ScrollTrigger
            // (la timeline est créée mais peut être déclenchée autrement/ailleurs).
            if (type == "slide-up") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                yPercent: offset,
                duration,
                ease,
                opacity: 0,
            });
            }
            if (type == "slide-down") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                yPercent: -offset,
                duration,
                ease,
                opacity: 0,
            });
            }
            if (type == "rotate-in") {
            let tl = gsap.timeline({ paused: true });
            tl.set(animation.querySelectorAll(`.${split}`), {
                transformPerspective: 400,
            });
            tl.from(animation.querySelectorAll(`.${split}`), {
                rotationX: -offset,
                duration,
                ease,
                force3D: true,
                opacity: 0,
                transformOrigin: "top center -50",
            });
            }
            if (type == "slide-from-right") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                xPercent: offset,
                duration,
                opacity: 0,
                ease,
            });
            }
            if (type == "fade-in") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                duration,
                ease,
                opacity: 0,
            });
            }
            if (type == "fade-in-random") {
            let tl = gsap.timeline({ paused: true });
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0,
                duration,
                ease,
                opacity: 0,
                stagger: { amount: stagger, from: "random" },
            });
            }
            if (type == "scrub") {
            tl.from(animation.querySelectorAll(`.${split}`), {
                opacity: 0.2,
                duration,
                ease,
            });
            }
        }
        });

        // Animation "fade-top" en cascade : chaque élément ".fade-top" d'un
        // ".fade-wrapper" apparaît en fondu avec un léger décalage (delay) croissant.
        if ($(".fade-wrapper").length > 0) {
            $(".fade-wrapper").each(function () {
                var section = $(this);
                var fadeItems = section.find(".fade-top");
        
                fadeItems.each(function (index, element) {
                var delay = index * 0.10;
        
                gsap.set(element, {
                    opacity: 0,
                    y: 100,
                });
        
                ScrollTrigger.create({
                    trigger: element,
                    start: "top 100%",
                    end: "bottom 20%",
                    scrub: 0.5,
                    onEnter: function () {
                    gsap.to(element, {
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        delay: delay,
                    });
                    },
                    once: true,
                });
                });
            });
        }
        
        // Animation d'apparition caractère par caractère pour les éléments
        // ".text-animation-effect", déclenchée peu après le chargement complet de la page.
        window.addEventListener("load", (event) => {
            setTimeout(() => {
                function textAnimationEffect(){
                    let TextAnim = gsap.timeline();
                    let splitText = new SplitType( ".text-animation-effect", { types: 'chars' });
                    if( $('.text-animation-effect .char').length ){
                        TextAnim.from(".text-animation-effect .char", { duration: 1, x: 50, autoAlpha: 0, stagger: 0.1 }, "-=1");
                    }
                }
                textAnimationEffect();
            }, 200);
        });

        // Animation d'échelle (zoom) au défilement : les éléments ".scale" et les images
        // à l'intérieur passent d'une taille agrandie/réduite à leur taille normale,
        // en lecture/inversion selon le sens du scroll (toggleActions).
        var scale = document.querySelectorAll(".scale");
        var image = document.querySelectorAll(".scale img");
        scale.forEach((item) => {
            gsap.to(item, {
            scale: 1,
            duration: 1,
            ease: "power1.out",
            scrollTrigger: {
                trigger: item,
                start: 'top bottom',
                end: "bottom top",
                toggleActions: 'play reverse play reverse'
            }
            });
        });
        image.forEach((image) => {
            gsap.set(image, {
            scale: 1.3,
            });
            gsap.to(image, {
            scale: 1,
            duration: 1,
            scrollTrigger: {
                trigger: image,
                start: 'top bottom',
                end: "bottom top",
                toggleActions: 'play reverse play reverse'
            }
            });
        })

        // Pourcentage de défilement de la page : calcule le pourcentage scrollé
        // et met à jour visuellement le bouton "retour en haut" (dégradé conique
        // représentant la progression, remplacé par une flèche une fois proche de 100%).
        function scrollTopPercentage() {
            const scrollPercentage = () => {
                const scrollTopPos = document.documentElement.scrollTop;
                const calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrollValue = Math.round((scrollTopPos / calcHeight) * 100);
                const scrollElementWrap = $("#scroll-percentage");

                scrollElementWrap.css("background", `conic-gradient( var(--cp-color-theme-primary) ${scrollValue}%, var(--cp-color-bg-2) ${scrollValue}%)`);

                // Affiche/masque l'indicateur de progression du scroll
                if ( scrollTopPos > 100 ) {
                    scrollElementWrap.addClass("active");
                } else {
                    scrollElementWrap.removeClass("active");
                }

                if( scrollValue < 96 ) {
                    $("#scroll-percentage-value").text(`${scrollValue}%`);
                } else {
                    $("#scroll-percentage-value").html('<i class="fa-sharp fa-regular fa-arrow-up-long"></i>');
                }
            }
            window.onscroll = scrollPercentage;
            window.onload = scrollPercentage;

            // Retour en haut de page (clic sur l'indicateur de progression)
            function scrollToTop() {
                document.documentElement.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            }
            
            $("#scroll-percentage").on("click", scrollToTop);
        }

        scrollTopPercentage();
    });

    // Boutons de défilement vers une section ciblée (ancre définie via data-target),
    // avec un défilement fluide animé par GSAP (plugin ScrollTo).
    document.querySelectorAll(".scroll-btn").forEach((btn, index) => {
        btn.addEventListener("click", () => {
            var sectionTarget = btn.getAttribute("data-target");
            gsap.to(window, {duration: 1, scrollTo:{y:sectionTarget, offsetY:70}});
        });
    });

})(jQuery);
