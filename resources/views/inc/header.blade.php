 {{-- resources/views/inc/header.blade.php --}}
 {{-- En-tête / barre de navigation principale, incluse en haut de chaque page --}}
 <header class="header sticky-active">
     <div class="primary-header">
         <div class="header-wrap">
             <div class="primary-header-inner">
                 {{-- Logo du cabinet, lien vers l'accueil --}}
                 <div class="header-logo d-lg-block">
                     <a href="/">
                         <img src="{{ asset('assets/img/logo/SOPHOS LOGO WEB.png') }}" alt="logo">
                     </a>
                 </div>
                 {{-- Menu de navigation principal --}}
                 <div class="header-menu-wrap">
                     <div class="mobile-menu-items">
                         <ul>
                             <li><a href="/">Accueil</a></li>
                             <li><a href="/#lestudio">Le cabinet</a></li>
                             <li><a href="/services">Nos Services</a></li>
                             <li>
                                 <a href="https://www.facebook.com/profile.php?id=61590550290886" target="_blank"
                                     rel="noopener noreferrer">Portfolio</a>
                             </li>

                             <li><a href="/contact">Contacts</a></li>
                             <li><a href="/studiopodcast"><span>Découvrez nos studios podcast</span></a></li>
                            <li><a href="/coworking">Coworking</a></li>
                         </ul>
                     </div>
                 </div>
                 <!-- /.header-menu-wrap -->
                 {{-- Zone droite du header : bouton menu latéral et icône menu mobile --}}
                 <div class="header-right-wrap">
                     <div class="header-right">
                         <!-- <div class="header-btn-wrap">
                             <a href="/studiopodcast" class="cp-primary-btn header-btn">
                                 <span class="btn-text">
                                     <span class="btn-text-1">Découvrez nos studios podcast</span>
                                     <span class="btn-text-2">Découvrez nos studios podcast</span>
                                 </span>
                             </a>
                         </div> -->
                         <div class="sidebar-icon">
                             <button class="sidebar-trigger open">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </button>
                         </div>
                         <div class="header-right-item d-lg-none d-md-block">
                             <a href="javascript:void(0)" class="mobile-side-menu-toggle">
                                 <img src="assets/img/icon/mobile-menu.png" alt="icon">
                             </a>
                         </div>
                     </div>
                     <!-- /.header-right -->
                 </div>
             </div>
             <!-- /.primary-header-inner -->
         </div>
     </div>
 </header>
 {{-- Fin de l'en-tête principal --}}
