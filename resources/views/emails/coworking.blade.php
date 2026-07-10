{{-- Email HTML envoyé à l'équipe Sophos Congo lors d'une nouvelle demande de réservation de coworking. --}}
{{-- Le CSS est entièrement inline (obligatoire pour la compatibilité avec les clients mail comme Outlook, Gmail, etc.), ne pas le convertir en feuille de style externe. --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle demande de coworking</title>
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

                    {{-- Badge indiquant le type de demande (coworking) --}}
                    <tr>
                        <td style="background-color:#1a1a1a; padding: 24px 50px; text-align:center;">
                            <span style="display:inline-block; background:linear-gradient(135deg,#2563EB,#7C3AED); color:#fff; font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:8px 20px; border-radius:30px;">
                                Nouvelle demande de Coworking
                            </span>
                        </td>
                    </tr>

                    {{-- Corps principal de l'email : message d'introduction et détails de la demande --}}
                    <tr>
                        <td style="background-color:#ffffff; padding: 40px 50px;">

                            <p style="margin:0 0 30px 0; color:#444444; font-size:15px; line-height:1.7;">
                                Bonjour,<br>
                                Une nouvelle demande de réservation d'espace coworking vient d'être soumise via le site <strong>sophoscongo.com</strong>. Voici les détails ci-dessous.
                            </p>

                            {{-- Bloc : informations personnelles du demandeur (nom, métier, ville) --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:30px;">
                                <tr>
                                    <td style="padding-bottom:16px; border-bottom:1px solid #eeeeee;">
                                        <p style="margin:0 0 10px 0; color:#999999; font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase;">Informations personnelles</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 0; border-bottom:1px solid #f5f5f5;">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="40%" style="color:#999999; font-size:13px;">Nom et prénoms</td>
                                                <td style="color:#111111; font-size:14px; font-weight:600;">{{ $data['fullname'] }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 0; border-bottom:1px solid #f5f5f5;">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="40%" style="color:#999999; font-size:13px;">Métier principal</td>
                                                <td style="color:#111111; font-size:14px; font-weight:600;">{{ $data['metier'] }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 0;">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="40%" style="color:#999999; font-size:13px;">Commune / Ville</td>
                                                <td style="color:#111111; font-size:14px; font-weight:600;">{{ $data['commune'] }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            {{-- Bloc : formule de coworking sélectionnée (espace, durée, prix) --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:30px;">
                                <tr>
                                    <td style="padding-bottom:16px; border-bottom:1px solid #eeeeee;">
                                        <p style="margin:0 0 10px 0; color:#999999; font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase;">Formule sélectionnée</p>
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

                            <p style="margin:0; color:#888888; font-size:13px; line-height:1.7; background:#f9f9f9; padding:16px 20px; border-radius:8px; border-left:3px solid #2563EB;">
                                Merci de contacter ce client dans les plus brefs délais pour confirmer la disponibilité et finaliser la réservation.
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
                                <a href="mailto:info@sophoscongo.com" style="color:#2563EB; text-decoration:none;">info@sophoscongo.com</a>
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
