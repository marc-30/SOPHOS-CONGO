{{-- Email de notification envoyé lors de la soumission du formulaire de contact du site --}}
<div>
    <h2>Nouveau message de contact</h2>

    {{-- Coordonnées de la personne ayant rempli le formulaire --}}
    <p><strong>Nom :</strong> {{ $data['fullname'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Sujet :</strong> {{ $data['subject'] }}</p>

    {{-- Contenu du message envoyé par le visiteur --}}
    <p><strong>Message :</strong></p>
    <p>{{ $data['message'] }}</p>
</div>
