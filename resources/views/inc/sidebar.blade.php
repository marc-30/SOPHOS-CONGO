{{-- resources/views/inc/sidebar.blade.php --}}
{{-- Panneau latéral (sidebar) ouvert via le bouton menu du header : présentation du cabinet et coordonnées --}}
<div id="sidebar-area" class="sidebar-area">
    {{-- Bouton de fermeture du panneau --}}
    <button class="sidebar-trigger close">
        <svg class="sidebar-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="16px" height="12.7px" viewBox="0 0 16 12.7" style="enable-background: new 0 0 16 12.7"
            xml:space="preserve">
            <g>
                <rect x="0" y="5.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)" width="16"
                    height="2"></rect>
                <rect x="0" y="5.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)" width="16"
                    height="2"></rect>
            </g>
        </svg>
    </button>
    <div class="side-menu-content">
        <div class="side-menu-logo">
            <a class="dark-img" href="/"><img src="assets/img/logo/SOPHOS LOGO WEB.png" alt="logo"></a>
        </div>
        <div class="side-menu-wrap"></div>
        {{-- Bloc "Qui sommes-nous" : courte présentation du cabinet --}}
        <div class="side-menu-about">
            <div class="side-menu-header">
                <h3>Qui sommes nous ?</h3>
            </div>
            <p>Cabinet de transformation digitale et
                d'intelligence artificielle, Sophos Congo
                accompagne institutions, entreprises et
                dirigeants dans leur transition numérique —
                avec la communication stratégique comme l'un
                de nos services clés.
            </p>
            <!-- <a href="/studiopodcast" class="cp-primary-btn">
                <span class="btn-text">
                   <span class="btn-text-1">Découvrez nos studios podcast</span>
                    <span class="btn-text-2">Découvrez nos studios podcast</span>
                </span>
            </a> -->
        </div>
        {{-- Bloc coordonnées : adresse, téléphone et email --}}
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
        {{-- Liens vers les réseaux sociaux --}}
        <ul class="side-menu-social">
            <li class="facebook"><a href="https://www.facebook.com/profile.php?id=61588482088145" target="_blank"><i
                        class="fab fa-facebook-f"></i></a></li>
            <li class="instagram"><a href="https://www.instagram.com/sophoscongoci/" target="_blank"><i
                        class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>
{{-- Fin du panneau latéral --}}
