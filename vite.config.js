// Configuration de Vite (outil de build/bundling front-end) pour le projet Laravel.
import { defineConfig } from 'vite';
// Plugin officiel qui intègre Vite avec Laravel (génération du manifest, hot reload, etc.).
import laravel from 'laravel-vite-plugin';
// Plugin Tailwind CSS pour Vite.
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        // Déclare les fichiers d'entrée (CSS et JS) à compiler,
        // et active le rafraîchissement automatique du navigateur pendant le développement.
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        // Active le traitement des classes utilitaires Tailwind CSS.
        tailwindcss(),
    ],
    server: {
        watch: {
            // Ignore les vues compilées de Laravel (cache Blade) pour éviter
            // de déclencher des rechargements inutiles pendant le développement.
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
