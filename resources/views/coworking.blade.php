{{-- resources/views/coworking.blade.php --}}
{{-- Page "Espace Coworking" (Sophos Spaces) : présentation des formules et formulaire de réservation --}}
<x-layout
    title="Espace Coworking Brazzaville — Sophos Spaces | Sophos Congo"
    description="Réservez votre espace de coworking à Brazzaville avec Sophos Spaces : salles climatisées, bureaux privés, terrasses aérées et salles de réunion, par le cabinet de transformation digitale Sophos Congo."
>

    {{-- Styles propres aux cartes de formules, boutons de durée, select personnalisé et résumé de sélection --}}
    <style>
        /* ══════════════════════════════════════
           CARDS FORMULE — Premium épuré
        ══════════════════════════════════════ */
        .coworking-card { cursor: default; display: block; width: 100%; }

        .coworking-card .card-inner {
            position: relative;
            background: rgba(255,255,255,0.03);
            border-radius: 16px;
            padding: 24px 22px 20px;
            height: 100%;
            border: 1px solid rgba(255,255,255,0.07);
            transition: background 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            overflow: hidden;
        }

        /* Barre accent gauche */
        .coworking-card .card-inner::before {
            content: '';
            position: absolute;
            left: 0; top: 16%; bottom: 16%;
            width: 3px;
            border-radius: 0 3px 3px 0;
            background: linear-gradient(180deg, #2563EB, #7C3AED);
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        .coworking-card .card-inner.selected {
            background: rgba(37,99,235,0.07);
            border-color: rgba(37,99,235,0.3);
            box-shadow: 0 0 0 1px rgba(37,99,235,0.2), 0 8px 28px rgba(37,99,235,0.1);
        }
        .coworking-card .card-inner.selected::before { opacity: 1; }

        /* Icône */
        .card-icon-wrap {
            width: 44px; height: 44px;
            border-radius: 11px;
            background: linear-gradient(135deg, rgba(37,99,235,0.15), rgba(124,58,237,0.15));
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 14px;
            flex-shrink: 0;
        }
        .card-icon-wrap i {
            font-size: 1.1rem;
            background: linear-gradient(135deg, #2563EB, #7C3AED);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .coworking-card h4 {
            font-size: 0.95rem; font-weight: 700;
            margin-bottom: 5px;
        }
        .coworking-card .card-desc {
            font-size: 0.8rem; opacity: 0.45;
            margin-bottom: 16px; line-height: 1.5;
        }

        /* ── Boutons durée intégrés dans chaque card ── */
        .duration-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            padding-top: 14px;
            border-top: 1px solid rgba(255,255,255,0.06);
        }
        .duration-btn {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.09);
            border-radius: 10px;
            padding: 11px 8px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3px;
            transition: all 0.2s ease;
            text-align: center;
            color: inherit;
            font-family: inherit;
            width: 100%;
        }
        .duration-btn:hover {
            background: rgba(37,99,235,0.1);
            border-color: rgba(37,99,235,0.35);
        }
        .duration-btn.active {
            background: linear-gradient(135deg, rgba(37,99,235,0.22), rgba(124,58,237,0.18));
            border-color: #2563EB;
            box-shadow: 0 0 0 1px rgba(37,99,235,0.25), 0 4px 12px rgba(37,99,235,0.15);
        }
        .duration-label {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            opacity: 0.5;
            font-weight: 600;
        }
        .duration-btn.active .duration-label { opacity: 0.75; }
        .duration-price {
            font-size: 0.9rem;
            font-weight: 700;
            color: #fff;
            white-space: nowrap;
        }
        .duration-price small {
            font-size: 0.62rem;
            font-weight: 400;
            opacity: 0.5;
        }
        .duration-grid-3 {
            grid-template-columns: 1fr 1fr 1fr;
        }
        .devis-btn {
            width: 100%;
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid rgba(255,255,255,0.06);
        }
        .devis-btn .duration-btn {
            flex-direction: row;
            justify-content: center;
            gap: 8px;
            padding: 13px 8px;
        }
        .devis-btn .duration-label {
            font-size: 0.85rem;
            text-transform: none;
            letter-spacing: normal;
            opacity: 0.85;
            font-weight: 600;
        }

        /* ══════════════════════════════════════
           SECTION TITLES
        ══════════════════════════════════════ */
        .form-section-title {
            font-size: 0.72rem; font-weight: 800;
            letter-spacing: 2.5px; text-transform: uppercase;
            background: linear-gradient(135deg, #2563EB, #7C3AED);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
            margin-bottom: 20px;
            display: flex; align-items: center; gap: 12px;
        }
        .form-section-title::after {
            content: ''; flex: 1; height: 1px;
            background: rgba(255,255,255,0.07);
        }

        /* ══════════════════════════════════════
           CUSTOM SELECT
        ══════════════════════════════════════ */
        .cs-wrapper { position: relative; }
        .cs-trigger {
            display: flex; align-items: center; justify-content: space-between;
            padding: 14px 18px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px; cursor: pointer;
            transition: border-color 0.2s ease, background 0.2s ease;
            user-select: none;
        }
        .cs-trigger:hover { border-color: rgba(255,255,255,0.2); }
        .cs-wrapper.open .cs-trigger { border-color: rgba(37,99,235,0.5); background: rgba(37,99,235,0.05); }
        .cs-trigger-text { font-size: 0.9rem; color: rgba(255,255,255,0.45); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .cs-trigger-text.selected { color: rgba(255,255,255,0.9); }
        .cs-trigger-icon { flex-shrink: 0; margin-left: 10px; font-size: 0.75rem; opacity: 0.4; transition: transform 0.2s ease; }
        .cs-wrapper.open .cs-trigger-icon { transform: rotate(180deg); opacity: 0.8; }
        .cs-dropdown {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; right: 0;
            background: #141414; border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px; z-index: 200; overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
        .cs-wrapper.open .cs-dropdown { display: block; }
        .cs-search { padding: 10px 14px; border-bottom: 1px solid rgba(255,255,255,0.07); }
        .cs-search input {
            width: 100%; background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1); border-radius: 6px;
            padding: 8px 12px; color: #fff; font-size: 0.85rem; outline: none;
        }
        .cs-search input::placeholder { opacity: 0.4; }
        .cs-search input:focus { border-color: rgba(37,99,235,0.5); }
        .cs-list { max-height: 260px; overflow-y: auto; padding: 6px 0; }
        .cs-list::-webkit-scrollbar { width: 4px; }
        .cs-list::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.15); border-radius: 2px; }
        .cs-group-label {
            padding: 8px 14px 4px; font-size: 0.65rem; font-weight: 700;
            letter-spacing: 1.5px; text-transform: uppercase;
            background: linear-gradient(135deg, #2563EB, #7C3AED);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .cs-option { padding: 9px 14px; font-size: 0.88rem; color: rgba(255,255,255,0.75); cursor: pointer; transition: background 0.15s ease, color 0.15s ease; }
        .cs-option:hover { background: rgba(37,99,235,0.12); color: #fff; }
        .cs-option.active { background: rgba(37,99,235,0.18); color: #fff; font-weight: 600; }
        .cs-option.hidden { display: none; }

        /* ══════════════════════════════════════
           VALIDATION / RÉSUMÉ
        ══════════════════════════════════════ */
        .invalid-feedback-custom { color: #f87171; font-size: 0.8rem; margin-top: 6px; }

        /* Résumé de sélection visible */
        .selection-summary {
            display: none;
            margin-top: 20px;
            padding: 14px 18px;
            border-radius: 12px;
            background: rgba(37,99,235,0.08);
            border: 1px solid rgba(37,99,235,0.25);
            font-size: 0.88rem;
            color: rgba(255,255,255,0.8);
            align-items: center;
            gap: 10px;
        }
        .selection-summary.visible { display: flex; }
        .selection-summary i {
            background: linear-gradient(135deg, #2563EB, #7C3AED);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
            font-size: 1rem; flex-shrink: 0;
        }
        .selection-summary strong { color: #fff; }
    </style>

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

    {{-- Panneau latéral (sidebar) avec présentation et coordonnées --}}
    @include('inc.sidebar')

    {{-- Menu mobile latéral (déroulé sur petits écrans) --}}
    <div class="mobile-side-menu">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href="/"><img src="{{ asset('assets/img/logo/SOPHOS LOGO WEB.png') }}" alt="logo"></a>
                <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <div class="side-menu-wrap"></div>
            <div class="side-menu-contact">
                <div class="side-menu-header"><h3>Où nous trouver</h3></div>
                <ul class="side-menu-list">
                    <li><i class="fas fa-map-marker-alt"></i><p>Ravin du Tchad, Plateau, Brazzaville.</p></li>
                    <li><i class="fas fa-phone"></i><a href="tel:+242067768642">+242 06 776 86 42</a></li>
                    <li><i class="fas fa-envelope-open-text"></i><a href="mailto:contact@sophoscongo.com">contact@sophoscongo.com</a></li>
                </ul>
            </div>
            <ul class="side-menu-social">
                <li class="facebook"><a href="https://www.facebook.com/profile.php?id=61588482088145" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li class="instagram"><a href="https://www.instagram.com/sophoscongoci/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="mobile-side-menu-overlay"></div>

    {{-- Bannière d'en-tête de la page Coworking --}}
    <section class="page-header" data-background="{{ asset('assets/img/SOPHOS-espace-Coworking.jpg') }}" style="height: 320px;">
        <div class="overlay"></div>
    </section>

    {{-- Carrousel présentant les espaces disponibles à la location --}}
    <section class="project-section pt-150 pb-80 overflow-hidden">
        <div class="container">
            <div class="project-top heading-space">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char"
                        data-duration="0.9" data-stagger="0.03">Découvrez</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Nos espaces <br> <span> de coworking </span></h2>
                </div>
            </div>
            <div class="project-carousel-wrap">
            <div class="project-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn"></div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/espace coworking.jpg" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">Coworking</a></h3>
                                <span>DÈS 5 000 FCFA / JOUR</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn"></div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/bureaux privé.jpg" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">Bureau Privatif</a></h3>
                                <span>SUR CONTRAT</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item project-item-2">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <div class="project-btn"></div>
                                <div class="main-img scale" data-cursor-text="View Project">
                                    <a href="#"><img src="assets/img/salle de reunion.jpg" alt="image"></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="#">Salle de Réunion</a></h3>
                                <span>DÈS 25 000 FCFA / 4H</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-side-nav carousel-side-nav-prev swiper-prev-single"><i class="fa-regular fa-arrow-left"></i></div>
            <div class="carousel-side-nav carousel-side-nav-next swiper-next-single"><i class="fa-regular fa-arrow-right"></i></div>
            </div>
        </div>
    </section>

    {{-- Infos rapides : aperçu des formules et prix de départ --}}
    <section class="contact-top-area pt-150 pb-80">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><i class="fas fa-briefcase" style="font-size:2.5rem;color:#2563EB;"></i></div>
                        <div class="contact-content"><span>Coworking</span><h4 class="title">Dès 5 000 FCFA</h4></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><i class="fas fa-door-closed" style="font-size:2.5rem;color:#2563EB;"></i></div>
                        <div class="contact-content"><span>Bureau privatif</span><h4 class="title">Sur contrat</h4></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><i class="fas fa-users" style="font-size:2.5rem;color:#2563EB;"></i></div>
                        <div class="contact-content"><span>Salle de réunion</span><h4 class="title">Dès 25 000 FCFA</h4></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-item">
                        <div class="icon"><i class="fas fa-chalkboard-teacher" style="font-size:2.5rem;color:#2563EB;"></i></div>
                        <div class="contact-content"><span>Salle de formation</span><h4 class="title">Dès 50 000 FCFA</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Formulaire de réservation coworking : infos personnelles, choix de la formule/durée et envoi de la demande --}}
    <section class="contact-section pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12">
                    <div class="blog-contact-form form-2">

                        <div class="section-heading mb-50">
                            <h4 class="sub-heading" data-text-animation="fade-in-right" data-split="char" data-duration="0.9" data-stagger="0.03">Réservation</h4>
                            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Réservez votre <span>espace de travail</span></h2>
                            <p style="margin-top:16px;opacity:0.55;font-size:0.92rem;">Choisissez votre espace et votre durée en un seul clic, puis envoyez votre demande.</p>
                        </div>

                        @if (session('success'))
                            <div class="alert mb-40" style="border-radius:10px;padding:16px 22px;border:none;background:rgba(40,167,69,0.1);border-left:3px solid #28a745;color:#4ade80;font-weight:600;">
                                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            </div>
                        @endif

                        <div class="request-form">
                            <form action="{{ route('coworking.send') }}" method="POST" id="coworking-form">
                                @csrf

                                {{-- Champs cachés mis à jour par JS --}}
                                <input type="hidden" name="espace" id="hidden-espace" value="{{ old('espace') }}">
                                <input type="hidden" name="duree"  id="hidden-duree"  value="{{ old('duree') }}">

                                {{-- ─── SECTION 1 : Infos personnelles ─── --}}
                                <p class="form-section-title">Vos informations personnelles</p>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" name="fullname" class="form-control"
                                                placeholder="Nom et prénoms *" value="{{ old('fullname') }}" required>
                                            @error('fullname')<p class="invalid-feedback-custom">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" name="metier" class="form-control"
                                                placeholder="Votre métier principal *" value="{{ old('metier') }}" required>
                                            @error('metier')<p class="invalid-feedback-custom">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Votre adresse email *" value="{{ old('email') }}" required>
                                            @error('email')<p class="invalid-feedback-custom">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <div class="cs-wrapper" id="cs-commune">
                                                <div class="cs-trigger" role="button" tabindex="0" aria-haspopup="listbox">
                                                    <span class="cs-trigger-text" id="cs-commune-label">Votre commune ou ville *</span>
                                                    <i class="fas fa-chevron-down cs-trigger-icon"></i>
                                                </div>
                                                <div class="cs-dropdown" role="listbox">
                                                    <div class="cs-search">
                                                        <input type="text" placeholder="Rechercher une ville..." id="cs-commune-search" autocomplete="off">
                                                    </div>
                                                    <div class="cs-list" id="cs-commune-list">
                                                        <p class="cs-group-label">Arrondissements de Brazzaville</p>
                                                        <div class="cs-option" data-value="Makélékélé">Makélékélé</div>
                                                        <div class="cs-option" data-value="Bacongo">Bacongo</div>
                                                        <div class="cs-option" data-value="Poto-Poto">Poto-Poto</div>
                                                        <div class="cs-option" data-value="Moungali">Moungali</div>
                                                        <div class="cs-option" data-value="Ouenzé">Ouenzé</div>
                                                        <div class="cs-option" data-value="Talangaï">Talangaï</div>
                                                        <div class="cs-option" data-value="Mfilou">Mfilou</div>
                                                        <div class="cs-option" data-value="Madibou">Madibou</div>
                                                        <div class="cs-option" data-value="Djiri">Djiri</div>
                                                        <div class="cs-option" data-value="Plateau">Plateau / Centre-Ville</div>
                                                        <p class="cs-group-label">Autres villes du Congo</p>
                                                        <div class="cs-option" data-value="Pointe-Noire">Pointe-Noire</div>
                                                        <div class="cs-option" data-value="Dolisie">Dolisie</div>
                                                        <div class="cs-option" data-value="Nkayi">Nkayi</div>
                                                        <div class="cs-option" data-value="Owando">Owando</div>
                                                        <div class="cs-option" data-value="Ouesso">Ouesso</div>
                                                        <div class="cs-option" data-value="Impfondo">Impfondo</div>
                                                        <div class="cs-option" data-value="Sibiti">Sibiti</div>
                                                        <div class="cs-option" data-value="Gamboma">Gamboma</div>
                                                        <div class="cs-option" data-value="Kinkala">Kinkala</div>
                                                        <div class="cs-option" data-value="Madingou">Madingou</div>
                                                        <div class="cs-option" data-value="Loandjili">Loandjili</div>
                                                        <div class="cs-option" data-value="Djambala">Djambala</div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="commune" id="cs-commune-value" value="{{ old('commune') }}" required>
                                            </div>
                                            @error('commune')<p class="invalid-feedback-custom">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- ─── SECTION 2 : Formule + durée intégrée ─── --}}
                                <p class="form-section-title" style="margin-top:20px;">Choisissez votre formule</p>
                                <p style="font-size:0.82rem;opacity:0.45;margin-bottom:22px;margin-top:-12px;">Cliquez directement sur la durée souhaitée pour la formule choisie.</p>

                                @error('espace')<p class="invalid-feedback-custom mb-15">{{ $message }}</p>@enderror
                                @error('duree')<p class="invalid-feedback-custom mb-15">{{ $message }}</p>@enderror

                                <div class="row gy-4 mb-30" id="cards-container">

                                    {{-- Card 1 : Coworking --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="coworking-card">
                                            <div class="card-inner" data-espace="coworking">
                                                <div class="card-icon-wrap"><i class="fas fa-briefcase"></i></div>
                                                <h4>Coworking</h4>
                                                <p class="card-desc">Environnement de travail moderne, calme et connecté, pensé pour entrepreneurs, freelances et jeunes entreprises.</p>
                                                <div class="duration-grid duration-grid-3">
                                                    <button type="button" class="duration-btn"
                                                        data-espace="coworking" data-duree="jour">
                                                        <span class="duration-label">Journée</span>
                                                        <span class="duration-price">5 000 <small>FCFA</small></span>
                                                    </button>
                                                    <button type="button" class="duration-btn"
                                                        data-espace="coworking" data-duree="semaine">
                                                        <span class="duration-label">Semaine</span>
                                                        <span class="duration-price">30 000 <small>FCFA</small></span>
                                                    </button>
                                                    <button type="button" class="duration-btn"
                                                        data-espace="coworking" data-duree="mois">
                                                        <span class="duration-label">Mois</span>
                                                        <span class="duration-price">100 000 <small>FCFA</small></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Card 2 : Bureau privatif (sur contrat, pas de tarif fixe) --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="coworking-card">
                                            <div class="card-inner" data-espace="bureau_prive">
                                                <div class="card-icon-wrap"><i class="fas fa-door-closed"></i></div>
                                                <h4>Bureau privatif</h4>
                                                <p class="card-desc">Espace exclusivement réservé à votre équipe, pour plus de confidentialité. Location sur contrat.</p>
                                                <div class="devis-btn">
                                                    <button type="button" class="duration-btn"
                                                        data-espace="bureau_prive" data-duree="sur_devis">
                                                        <i class="fas fa-file-signature"></i>
                                                        <span class="duration-label">Nous contacter pour un devis</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Card 3 : Salle de réunion --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="coworking-card">
                                            <div class="card-inner" data-espace="salle_reunion">
                                                <div class="card-icon-wrap"><i class="fas fa-users"></i></div>
                                                <h4>Salle de réunion</h4>
                                                <p class="card-desc">Idéale pour réunions professionnelles, rendez-vous clients, comités de direction ou présentations.</p>
                                                <div class="duration-grid">
                                                    <button type="button" class="duration-btn"
                                                        data-espace="salle_reunion" data-duree="4h">
                                                        <span class="duration-label">Demi-journée (4h)</span>
                                                        <span class="duration-price">25 000 <small>FCFA</small></span>
                                                    </button>
                                                    <button type="button" class="duration-btn"
                                                        data-espace="salle_reunion" data-duree="journee">
                                                        <span class="duration-label">Journée</span>
                                                        <span class="duration-price">50 000 <small>FCFA</small></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Card 4 : Salle de formation --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="coworking-card">
                                            <div class="card-inner" data-espace="salle_formation">
                                                <div class="card-icon-wrap"><i class="fas fa-chalkboard-teacher"></i></div>
                                                <h4>Salle de formation</h4>
                                                <p class="card-desc">Pour sessions de formation, ateliers, conférences ou séminaires. Capacité jusqu'à 60 personnes.</p>
                                                <div class="duration-grid">
                                                    <button type="button" class="duration-btn"
                                                        data-espace="salle_formation" data-duree="4h">
                                                        <span class="duration-label">Demi-journée (4h)</span>
                                                        <span class="duration-price">50 000 <small>FCFA</small></span>
                                                    </button>
                                                    <button type="button" class="duration-btn"
                                                        data-espace="salle_formation" data-duree="journee">
                                                        <span class="duration-label">Journée</span>
                                                        <span class="duration-price">90 000 <small>FCFA</small></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- Résumé de sélection --}}
                                <div class="selection-summary" id="selection-summary">
                                    <i class="fas fa-circle-check"></i>
                                    <span id="selection-text"></span>
                                </div>

                                {{-- ─── Submit ─── --}}
                                <div class="submit-btn" style="margin-top:32px;">
                                    <button type="submit" class="cp-primary-btn" style="border:none;cursor:pointer;">
                                        <span class="btn-text">
                                            <span class="btn-text-1">Envoyer ma demande de réservation</span>
                                            <span class="btn-text-2">Envoyer ma demande de réservation</span>
                                        </span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Script de la page : gère le select personnalisé "commune", la sélection formule/durée, le résumé et la validation avant envoi --}}
    <script>
    (function () {

        /* ── Custom select commune ── */
        const csWrapper = document.getElementById('cs-commune');
        const csTrigger = csWrapper.querySelector('.cs-trigger');
        const csLabel   = csWrapper.querySelector('.cs-trigger-text');
        const csSearch  = csWrapper.querySelector('#cs-commune-search');
        const csHidden  = csWrapper.querySelector('#cs-commune-value');
        const csOptions = csWrapper.querySelectorAll('.cs-option');

        const preSelected = csHidden.value;
        if (preSelected) {
            csOptions.forEach(opt => {
                if (opt.dataset.value === preSelected) {
                    csLabel.textContent = opt.textContent;
                    csLabel.classList.add('selected');
                    opt.classList.add('active');
                }
            });
        }

        csTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            csWrapper.classList.toggle('open');
            if (csWrapper.classList.contains('open')) csSearch.focus();
        });

        csOptions.forEach(opt => {
            opt.addEventListener('click', () => {
                csOptions.forEach(o => o.classList.remove('active'));
                opt.classList.add('active');
                csLabel.textContent = opt.textContent;
                csLabel.classList.add('selected');
                csHidden.value = opt.dataset.value;
                csWrapper.classList.remove('open');
                csSearch.value = '';
                csOptions.forEach(o => o.classList.remove('hidden'));
            });
        });

        csSearch.addEventListener('input', () => {
            const q = csSearch.value.toLowerCase().trim();
            csOptions.forEach(opt => opt.classList.toggle('hidden', q && !opt.textContent.toLowerCase().includes(q)));
        });

        document.addEventListener('click', (e) => {
            if (!csWrapper.contains(e.target)) csWrapper.classList.remove('open');
        });

        csTrigger.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); csTrigger.click(); }
            if (e.key === 'Escape') csWrapper.classList.remove('open');
        });

        /* ── Boutons durée + sélection formule ── */
        const hiddenEspace = document.getElementById('hidden-espace');
        const hiddenDuree  = document.getElementById('hidden-duree');
        const summary      = document.getElementById('selection-summary');
        const summaryText  = document.getElementById('selection-text');

        const espaceLabels = {
            coworking       : 'Coworking',
            bureau_prive    : 'Bureau privatif',
            salle_reunion   : 'Salle de réunion',
            salle_formation : 'Salle de formation',
        };
        const dureeLabels = {
            jour      : 'À la journée',
            semaine   : 'À la semaine',
            mois      : 'Au mois',
            '4h'      : 'Demi-journée (4h)',
            journee   : 'Journée complète',
            sur_devis : 'Sur devis',
        };

        function updateSummary(espace, duree, prix) {
            const prixText = prix ? ' — <strong>' + prix + ' FCFA</strong>' : ' — <strong>Sur devis</strong>';
            summaryText.innerHTML = 'Votre choix : <strong>' + espaceLabels[espace] + '</strong> — ' + dureeLabels[duree] + prixText;
            summary.classList.add('visible');
        }

        // Restaurer old() après échec de validation
        const oldEspace = hiddenEspace.value;
        const oldDuree  = hiddenDuree.value;
        if (oldEspace && oldDuree) {
            const matchBtn = document.querySelector('.duration-btn[data-espace="' + oldEspace + '"][data-duree="' + oldDuree + '"]');
            if (matchBtn) matchBtn.click();
        }

        document.querySelectorAll('.duration-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Réinitialiser tout
                document.querySelectorAll('.duration-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.coworking-card .card-inner').forEach(c => c.classList.remove('selected'));

                // Activer ce bouton et sa card
                btn.classList.add('active');
                btn.closest('.card-inner').classList.add('selected');

                // Mettre à jour les champs cachés
                hiddenEspace.value = btn.dataset.espace;
                hiddenDuree.value  = btn.dataset.duree;

                // Afficher le résumé (le bouton "sur devis" n'a pas de prix affiché)
                const priceEl = btn.querySelector('.duration-price');
                const prix = priceEl ? priceEl.childNodes[0].textContent.trim() : null;
                updateSummary(btn.dataset.espace, btn.dataset.duree, prix);
            });
        });

        /* ── Validation avant soumission ── */
        document.getElementById('coworking-form').addEventListener('submit', function (e) {
            if (!hiddenEspace.value || !hiddenDuree.value) {
                e.preventDefault();
                alert('Veuillez sélectionner une formule avant d\'envoyer.');
            }
        });

    })();
    </script>

</x-layout>
