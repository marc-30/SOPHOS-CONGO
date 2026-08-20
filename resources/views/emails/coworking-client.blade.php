{{-- Email de confirmation envoyé directement au client après sa demande de réservation/devis coworking. --}}
{{-- Le CSS est entièrement inline (obligatoire pour la compatibilité avec les clients mail comme Outlook, Gmail, etc.), ne pas le convertir en feuille de style externe. --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre demande a bien été reçue</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">

    {{-- Tableau englobant centrant le contenu de l'email (structure en tables imposée par les clients mail) --}}
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4f4f4; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="620" cellpadding="0" cellspacing="0" border="0" style="max-width:620px; width:100%;">

                    {{-- En-tête : logo/nom du cabinet sur fond sombre --}}
                    <tr>
                        <td style="background-color:#0d0d0d; border-radius:12px 12px 0 0; padding: 40px 50px; text-align:center;">
                            <p style="margin:0 0 6px 0; color:#aaaaaa; font-size:11px; letter-spacing:3px; text-transform:uppercase;">Cabinet de transformation digitale</p>
                            <h1 style="margin:0; color:#ffffff; font-size:28px; font-weight:700; letter-spacing:1px;">SOPHOS CONGO</h1>
                            <div style="width:50px; height:2px; background:#2563EB; margin:16px auto 0;"></div>
                        </td>
                    </tr>

                    {{-- Badge de confirmation --}}
                    <tr>
                        <td style="background-color:#1a1a1a; padding: 24px 50px; text-align:center;">
                            <span style="display:inline-block; background:linear-gradient(135deg,#16a34a,#22c55e); color:#fff; font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:8px 20px; border-radius:30px;">
                                ✓ Demande bien reçue
                            </span>
                        </td>
                    </tr>

                    {{-- Corps principal : message de remerciement et récapitulatif --}}
                    <tr>
                        <td style="background-color:#ffffff; padding: 40px 50px;">

                            <p style="margin:0 0 8px 0; color:#111111; font-size:19px; font-weight:700;">
                                Bonjour {{ $data['fullname'] }},
                            </p>
                            <p style="margin:0 0 30px 0; color:#444444; font-size:15px; line-height:1.7;">
                                Merci pour votre demande auprès de <strong>Sophos Congo</strong> ! Nous avons bien reçu les informations ci-dessous et notre équipe reviendra vers vous très rapidement pour confirmer la disponibilité et finaliser les détails.
                            </p>

                            {{-- Bloc : récapitulatif de la formule sélectionnée --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:30px;">
                                <tr>
                                    <td style="padding-bottom:16px; border-bottom:1px solid #eeeeee;">
                                        <p style="margin:0 0 10px 0; color:#999999; font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase;">Récapitulatif de votre demande</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top:20px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                               style="background:linear-gradient(135deg, #0d0d0d 0%, #1e1e1e 100%); border-radius:10px; padding:28px 30px;">
                                            <tr>
                                                <td>
                                                    <p style="margin:0 0 6px 0; color:#2563EB; font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase;">Espace choisi</p>
                                                    <p style="margin:0 0 20px 0; color:#ffffff; font-size:17px; font-weight:700; line-height:1.4;">{{ $data['espace_label'] }}</p>

                                                    <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="50%" style="padding-right:10px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                       style="background:rgba(255,255,255,0.07); border-radius:8px; padding:14px 16px;">
                                                                    <tr>
                                                                        <td>
                                                                            <p style="margin:0 0 4px 0; color:#aaaaaa; font-size:11px; letter-spacing:1px; text-transform:uppercase;">Durée</p>
                                                                            <p style="margin:0; color:#ffffff; font-size:15px; font-weight:700;">{{ $data['duree_label'] }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td width="50%" style="padding-left:10px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                       style="background:linear-gradient(135deg,#2563EB,#7C3AED); border-radius:8px; padding:14px 16px;">
                                                                    <tr>
                                                                        <td>
                                                                            <p style="margin:0 0 4px 0; color:rgba(255,255,255,0.7); font-size:11px; letter-spacing:1px; text-transform:uppercase;">Montant</p>
                                                                            <p style="margin:0; color:#fff; font-size:17px; font-weight:800;">{{ $data['prix'] }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:0 0 30px 0; color:#666666; font-size:14px; line-height:1.7; background:#f9f9f9; padding:16px 20px; border-radius:8px; border-left:3px solid #16a34a;">
                                Une question en attendant ? Contactez-nous directement au <a href="tel:+242067768642" style="color:#2563EB; text-decoration:none; font-weight:600;">+242 06 776 86 42</a>.
                            </p>

                            <p style="margin:0; color:#444444; font-size:15px; line-height:1.7;">
                                À très bientôt,<br>
                                <strong>L'équipe Sophos Congo</strong>
                            </p>

                        </td>
                    </tr>

                    {{-- Pied de page : coordonnées de l'entreprise et mention de droits réservés --}}
                    <tr>
                        <td style="background-color:#0d0d0d; border-radius:0 0 12px 12px; padding:30px 50px; text-align:center;">
                            <p style="margin:0 0 6px 0; color:#ffffff; font-size:13px; font-weight:600;">Sophos Congo</p>
                            <p style="margin:0 0 4px 0; color:#666666; font-size:12px;">Ravin du Tchad, Plateau, Brazzaville</p>
                            <p style="margin:0 0 4px 0; color:#666666; font-size:12px;">
                                <a href="tel:+242067768642" style="color:#2563EB; text-decoration:none;">+242 06 776 86 42</a>
                                &nbsp;·&nbsp;
                                <a href="mailto:reservation@sophoscongo.com" style="color:#2563EB; text-decoration:none;">reservation@sophoscongo.com</a>
                            </p>
                            <p style="margin:20px 0 0 0; color:#333333; font-size:11px;">© {{ date('Y') }} Sophos Congo. Tous droits réservés.</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
