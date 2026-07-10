{{-- resources/views/inc/coworking-cta.blade.php --}}
{{-- Bloc d'appel à l'action (CTA) faisant la promotion de l'espace coworking, inclus en bas de plusieurs pages --}}
{{-- Passer $hidden = true depuis la vue parente pour masquer ce bloc (ex: sur la page coworking elle-même) --}}
@unless(isset($hidden) && $hidden)
<section class="coworking-cta-section" style="background:#0a0a0a; border-top:1px solid rgba(255,255,255,0.07); padding:90px 0;">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h4 style="background:linear-gradient(135deg,#2563EB,#7C3AED);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text; font-size:0.78rem; letter-spacing:3px; text-transform:uppercase; margin-bottom:14px; font-weight:700;">Espace Coworking</h4>
                <h2 class="section-title" style="margin-bottom:16px;">Besoin d'un espace pour <span>travailler et créer ?</span></h2>
                <p style="opacity:0.6; font-size:1rem; line-height:1.7; max-width:520px; margin:0;">
                    Salles climatisées, bureaux privés, terrasses aérées et salles de réunion disponibles à Brazzaville, Ravin du Tchad — Plateau.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/coworking" class="cp-primary-btn">
                    <span class="btn-text">
                        <span class="btn-text-1">Réserver un espace</span>
                        <span class="btn-text-2">Réserver un espace</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
@endunless
