{{-- Mise en page (layout) minimaliste et générique utilisée par toutes les pages d'erreur HTTP (401, 403, 404, 500, etc.) --}}
{{-- Volontairement dépourvue de styles/scripts externes pour rester légère et fiable, même en cas de panne du serveur --}}
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Titre de l'onglet du navigateur, défini par chaque vue d'erreur (401.blade.php, 404.blade.php, etc.) --}}
        <title>@yield('title')</title>

    </head>
    <body>
        {{-- Bloc centré verticalement et horizontalement affichant le message d'erreur --}}
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    {{-- Message d'erreur défini par chaque vue d'erreur --}}
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>
