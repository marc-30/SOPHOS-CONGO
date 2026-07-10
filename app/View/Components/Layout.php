<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

// Composant Blade de mise en page commune (layout) utilisé par toutes les pages du site
class Layout extends Component
{
    // Titre de la page, affiché notamment dans la balise <title> du layout
    public string $title;
    /**
     * Crée une nouvelle instance du composant, avec un titre par défaut si non précisé.
     */
    public function __construct(string $title = 'Sophos Congo')
    {
        $this->title = $title;
    }

    /**
     * Retourne la vue associée à ce composant (le template Blade du layout).
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
