// Importe la librairie Axios pour effectuer des requêtes HTTP.
import axios from 'axios';
// Expose Axios sur l'objet global "window" afin qu'il soit accessible
// depuis n'importe quel script du projet sans import supplémentaire.
window.axios = axios;

// Ajoute l'en-tête "X-Requested-With" à toutes les requêtes Axios,
// ce qui permet à Laravel de détecter qu'il s'agit d'une requête AJAX (ex: méthode request()->ajax()).
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
